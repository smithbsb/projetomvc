<?php
namespace backEnd\model\dao;

require_once(MODEL_DAO  . '/AbstractDAO.php');
require_once(TO         . '/UseuserTO.php');

class UserDAO extends AbstractDAO {
    
    public function createUser($userTO) {
        parent::createByTO('tbluseuser', $userTO);
    }
    
    public function readByCodUser($cod) {
        return parent::readByCod('tbluseuser', $cod);
    }
    public function readUsers() {
        return parent::readByField('tbluseuser', 'couseuser', '%%', 'order by dcname asc', null);
    }
    
    public function updateUser($userTO) {
        parent::updateByTO('tbluseuser', $userTO);
    }
    
    public function deleteUser($cod) {
        parent::deleteByCod('tbluseuser', $cod);
    }
    
}
?>
