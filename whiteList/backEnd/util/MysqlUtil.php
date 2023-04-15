<?php

final class MysqlUtil {
	private static $instance = NULL;
	private $connection = NULL;
    
	private function __construct() { }
	
	public static function getInstance() { if (is_null(self::$instance)) {	self::$instance = new MysqlUtil(); } return self::$instance; }
	
    public function getConnection() {
        if ($_SERVER['SERVER_NAME'] == 'localhost') {
            $this->connection = mysqli_connect          ('localhost', 'root', 'Cacau123@#');
            mysqli_select_db                            ($this->connection, 'projetomvc');
        } else {
            //$this->connection = mysqli_connect          ('smithsoftwares.com', 'smiths62_smith1', 'Smith123@#');
            //mysqli_select_db                            ($this->connection, 'smiths62_smithsoftwares');
        }
        return $this->connection;			
    }
	
    public function openTransaction($conn)     { mysqli_query($conn, 'SET AUTOCOMMIT=0'); mysqli_query($conn, 'BEGIN'); }
    public function commitTransaction($conn)   { mysqli_query($conn, 'COMMIT'); mysqli_query($conn, 'SET AUTOCOMMIT=1'); }
    public function rollbackTransaction($conn) { mysqli_query($conn, 'ROLLBACK'); mysqli_query($conn, 'SET AUTOCOMMIT=1'); }
	public function closeConnection($conn)     { mysqli_close($conn); }
}
?>
