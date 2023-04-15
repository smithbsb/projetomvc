<?php
namespace backEnd\model\dao;

require_once(MODEL_DAO  . '/AbstractDAO.php');

class LoginDAO extends AbstractDAO {
    
    public function consultUserByMailAndPassword($mail, $pass) {
        $cod = parent::readItem("select couseuser from tbluseuser where dcmail = '".$mail."' and dcpass = '".$pass."';");
        return $cod;
    }
    
}
?>
