<?php
require_once(UTIL               . '/MysqlUtil.php');

class SecurityUtil {
    
    protected static function getConnection()           { $mysqlUtil = MysqlUtil::getInstance(); return $mysqlUtil->getConnection(); }
    protected static function commitTransaction($conn)  { $mysqlUtil = MysqlUtil::getInstance(); $mysqlUtil->commitTransaction($conn); }
    protected static function closeConnection($conn)    { $mysqlUtil = MysqlUtil::getInstance(); $mysqlUtil->closeConnection($conn); }
    
    public static function authenticateSession() {
        @session_start();
	    if (isset($_SESSION['kv'])) {
	        if ($_SESSION['kv']['ag'] == trim($_SERVER['HTTP_USER_AGENT'])) {
	            self::recordAccess('*authenticate session - ip and ag equals...');
	            $conn = self::getConnection();
	            $rS = mysqli_query($conn, 'select costatus from tblsafsession where cosafsession = '.$_SESSION['kv']['ss']);
	            $col = mysqli_fetch_array($rS, MYSQLI_NUM);
	            self::closeConnection($conn);
	            if (!isset($col)) {
	                self::recordAccess('*authenticate session - NOT exist line in table -3.');
	                self::killSession(-3); // not exist line in table
	            } else if ($col[0] != 1) {
	                self::recordAccess('*authenticate session - session killed by costatus -2.');
	                self::killSession(-2); // session killed by costatus
	            }
	        } else {
	            self::recordAccess('*authenticate session - ip and ag NOT equals -1.');
	            self::killSession(-1); // session x fisic
	        }
	    } else {
	        self::createSession();
	        @session_start();
	        self::recordAccess('*authenticate session - variable created.');
	    }
	}
	
	public static function createSession() {
	    $t = microtime(true);
	    $cosession_new = date('ymdHis').substr($t-floor($t), 2, 4);
	    $str = 'insert into tblsafsession (cosafsession, couseuser, dcip, dcagent, dcport, costatus) values ('.$cosession_new.', 0, \''.trim($_SERVER['REMOTE_ADDR']).'\', \''.trim($_SERVER['HTTP_USER_AGENT']).'\', \''.trim($_SERVER['REMOTE_PORT']).'\', 1);';
	    $conn = self::getConnection();
	    mysqli_query($conn, $str);
	    self::commitTransaction($conn);
	    self::closeConnection($conn);
	    @session_start();
	    $_SESSION['kv']['ss'] = trim($cosession_new);
	    $_SESSION['kv']['ip'] = trim($_SERVER['REMOTE_ADDR']);
	    $_SESSION['kv']['ag'] = trim($_SERVER['HTTP_USER_AGENT']);
	    $_SESSION['kv']['uu'] = 0;
	}
	
	public static function killSession($cod) {
	    @session_start();
	    $conn = self::getConnection();
	    mysqli_query($conn, 'update tblsafsession set costatus = '.$cod.' where cosafsession = '.$_SESSION['kv']['ss']);
	    self::commitTransaction($conn);
	    self::closeConnection($conn);
	    @session_destroy();
	    self::createSession();
	}
	
	public static function recordAccess($dcaccess) {
	    $conn = self::getConnection();
	    mysqli_query($conn, 'insert into tblsafaccess (cosafsession, dcip, dcagent, dcport, couseuser, dtaccess, dcaccess) values ('.$_SESSION['kv']['ss'].', \''.trim($_SERVER['REMOTE_ADDR']).'\', \''.trim($_SERVER['HTTP_USER_AGENT']).'\', \''.trim($_SERVER['REMOTE_PORT']).'\', '.$_SESSION['kv']['uu'].', now(), \''.$dcaccess.'\');');
	    self::commitTransaction($conn);
	    self::closeConnection($conn);
	}
	
	public static function authenticateUser() {
	    @session_start();
	    if ($_SESSION['kv']['uu'] != 0) {
	        $conn = self::getConnection();
	        $rS = mysqli_query($conn, 'select costatus from tbluseuser where couseuser = '.$_SESSION['kv']['uu']);
	        $col = mysqli_fetch_array($rS, MYSQLI_NUM);
	        self::closeConnection($conn);
	        if (!isset($col) || $col[0] == 0) {
	            $conn = self::getConnection();
	            mysqli_query($conn, 'update tblsafsession set couseuser = 0 where cosafsession = '.$_SESSION['kv']['ss']);
	            self::closeConnection($conn);
	            
	            $_SESSION['kv']['uu'] = 0;
	            self::recordAccess('*authenticate account - account status 0.');
	            self::killSession(-5); // account status 0
	            header('Location: /');
	            exit();
	        }
	    }
	}
	
	/*
	public static function authenticateUser() {
	    @session_start();
	    if ($_SESSION['kv']['uu'] == 0) {
            self::recordAccess('*authenticate account - session equal 0.');
	        self::killSession(-4); // session equal 0
	        //header('Location: /');
	        //exit();
	    } else {
	        $conn = self::getConnection();
	        $rS = mysqli_query($conn, 'select costatus from tbluseuser where couseuser = '.$_SESSION['kv']['uu']);
	        $col = mysqli_fetch_array($rS, MYSQLI_NUM);
	        self::closeConnection($conn);
	        if (!isset($col) || $col[0] == 0) {
	            self::recordAccess('*authenticate account - account status 0.');
	            self::killSession(-5); // account status 0
	            //header('Location: /');
	            //exit();
	        }
	    }
	}
	*/
}
?>
