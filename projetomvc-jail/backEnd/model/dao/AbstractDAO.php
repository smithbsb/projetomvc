<?php
namespace backEnd\model\dao;

use MysqlUtil;

require_once(UTIL               . '/MysqlUtil.php');

abstract class AbstractDAO {
    
    protected static function getConnection()           { $mysqlUtil = MysqlUtil::getInstance(); return $mysqlUtil->getConnection(); }
    protected static function commitTransaction($conn)  { $mysqlUtil = MysqlUtil::getInstance(); $mysqlUtil->commitTransaction($conn); }
    protected static function closeConnection($conn)    { $mysqlUtil = MysqlUtil::getInstance(); $mysqlUtil->closeConnection($conn); }
    protected static function getFieldsByTO($to)        { $fields = array(); foreach (get_class_methods(new $to()) as $item) { if (substr($item, 0, 1) == 'g') { $fields[] = substr($item, 3); } } return $fields; }
    protected static function getFieldsByTable($table)  { $fields = array(); $to = substr($table, 3).'TO'; $to = strtoupper(substr($to, 0, 1)).substr($to, 1); foreach (get_class_methods(new $to()) as $item) { if (substr($item, 0, 1) == 'g') { $fields[] = substr($item, 3); } } return $fields; }
    
    protected function createByTO($table, $to) {
        $connection = self::getConnection();
        $fields = self::getFieldsByTable($table);
        $fields1 = null;
        $fields2 = null;
        foreach ($fields as $item) {
            if ("co".substr($table, 3) == $item) {}
            else {
                $fields1 = $fields1.", ".$item;
                if (substr($item, 0, 1) == "d") {
                    $fields2 = $fields2.", \"".call_user_func(array($to, 'get'.$item))."\"";
                } else {
                    $fields2 = $fields2.", ".call_user_func(array($to, 'get'.$item));
                }
            }
        }
        $str = "insert into ".$table." (".substr($fields1, 2).") values (".substr($fields2, 2).");";
        $ret = "";
        
        if (!mysqli_query($connection, $str)) {
            $ret = $connection->error;
        }
        
        self::closeConnection($connection);
        return $ret;
    }
    
    protected function readByCod($table, $cod) {
        $conn = self::getConnection();
        
        $fields = self::getFieldsByTable($table);
        
        $to = null;
        $str = "select * from ".$table." where co".substr($table, 3)." = ".$cod;
        $rS = mysqli_query($conn, $str);
        while ($col = mysqli_fetch_array($rS, MYSQLI_ASSOC)) {
            $name = substr($table, 3)."TO";
            $name = strtoupper(substr($name, 0, 1)).substr($name, 1);
            $to = new $name();
            foreach ($fields as $item) {
                call_user_func_array(array($to, 'set'.$item), array($col[$item]));
            }
        }
        self::closeConnection($conn);
        return $to;
    }
    
    protected function readByField($table, $field, $value, $compl, $index) {
        $connection = self::getConnection();
        $fields = self::getFieldsByTable($table);
        $to = null;
        $list = null;
        $str = "";
        if ($index != "") {
            $str = "select * from ".$table." USE INDEX (".$index.") where ".$field." like \"".$value."\" ".$compl;
        } else {
            $str = "select * from ".$table." where ".$field." like \"".$value."\" ".$compl;
        }
        $rS = mysqli_query($connection, $str);
        while ($col = mysqli_fetch_array($rS, MYSQLI_ASSOC)) {
            $name = substr($table, 3)."TO";
            $name = strtoupper(substr($name, 0, 1)).substr($name, 1);
            $to = new $name();
            
            foreach ($fields as $item) {
                //call_user_method("set".$item, $to, $col[$item]);
                call_user_func_array(array($to, 'set'.$item), array($col[$item]));
            }
            $list[] = $to;
        }
        self::closeConnection($connection);
        return $list;
    }
    
    protected function readByTO($to, $query) {
        $connection = self::getConnection();
        if (file_exists(TO.'/'.$to.'.php')) require_once(TO.'/'.$to.'.php');
        $fields = self::getFieldsByTO($to);
        $list = null;
        $name = $to;
        $rS = mysqli_query($connection, $query);
        if(!mysqli_error($connection)) {
            while ($col = mysqli_fetch_array($rS, MYSQLI_ASSOC)) {
                $cl = new $name();
                foreach ($fields as $item) { call_user_func_array(array($cl, 'set'.$item), array($col[$item])); }
                $list[] = $cl;
            }
            self::closeConnection($connection);
            return $list;
        }
    }
    
    protected function updateByTO($table, $to) {
	    $connection = self::getConnection();
		$fields = self::getFieldsByTable($table);
		$aux = null;
		$pk = null;
		foreach ($fields as $item) {
			if ("co".substr($table, 3) == $item) {
				$pk = call_user_func(array($to, 'get'.$item));
			} else {
				$aux = $aux.", ".$item." = ";
				if (substr($item, 0, 1) == "d") {
					$aux = $aux."\"".call_user_func(array($to, 'get'.$item))."\"";
				} else {
					$aux = $aux.call_user_func(array($to, 'get'.$item));
				}
			}
		}
		$str = "update ".$table." set ".substr($aux, 2)." where co".substr($table, 3)." = ".$pk;
		mysqli_query($connection, $str);
		self::closeConnection($connection);
	}
	
	protected function deleteByCod($table, $cod) {
	    $connection = self::getConnection();
	    $str = "delete from ".$table." where co".substr($table, 3)." = ".$cod;
	    mysqli_query($connection, $str);
	    self::closeConnection($connection);
	}
	
	protected function readItem($query) {
	    $conn = self::getConnection();
	    $r_value = null;
	    $rS = mysqli_query($conn, $query);
	    while ($col = mysqli_fetch_array($rS, MYSQLI_NUM)) {
	        $r_value = $col[0];
	    }
	    self::closeConnection($conn);
	    return $r_value;
	}
	
	protected function executeQuery($query) {
	    $connection = self::getConnection();
	    mysqli_query($connection, $query);
	    self::commitTransaction($connection);
	    self::closeConnection($connection);
	}
	
}
?>
