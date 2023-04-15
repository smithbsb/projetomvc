<?php
namespace backEnd\control\facade\bo;

require_once(MODEL_DAO      . '/UserDAO.php');

use backEnd\model\dao\UserDAO;

class UserBO {
    
    public function createUser($userTO) {
        $userDAO = new UserDAO();
        $userDAO->createUser($userTO);
    }
    
    public function readByCodUser($cod) {
        $userDAO = new UserDAO();
        $userTO = $userDAO->readByCodUser($cod);
        return $userTO;
    }
    public function readUsers() {
        $userDAO = new UserDAO();
        $list_of_users = $userDAO->readUsers();
        return $list_of_users;
    }
    
    public function updateUser($userTO) {
        $userDAO = new UserDAO();
        $userDAO->updateUser($userTO);
    }
    
    public function deleteUser($cod) {
        $userDAO = new UserDAO();
        $userDAO->deleteUser($cod);
    }
    
}
?>
