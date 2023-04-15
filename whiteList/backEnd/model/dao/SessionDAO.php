<?php
namespace backEnd\model\dao;

require_once(MODEL_DAO  . '/AbstractDAO.php');

class SessionDAO extends AbstractDAO {
    
    public function updateSessionByUser($session, $cod) {
        if ($cod == 0) {
            parent::executeQuery("update tblsafsession set couseuser = 0 where cosafsession = ".$session);
        } else {
            parent::executeQuery("update tblsafsession set couseuser = ".$cod." where cosafsession = ".$session);
        }
    }
    
    public function verifySession($session) {
        return parent::readItem("select couseuser from tblsafsession where cosafsession = ".$session." and costatus = 1 and couseuser != 0;");
    }
    
}
?>
