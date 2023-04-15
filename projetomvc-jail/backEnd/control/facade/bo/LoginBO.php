<?php
namespace backEnd\control\facade\bo;

require_once(MODEL_DAO      . '/LoginDAO.php');

use backEnd\model\dao\LoginDAO;

class LoginBO {
    
    public function consultUserByMailAndPassword($mail, $pass) {
        $loginDAO = new LoginDAO();
        $cod = $loginDAO->consultUserByMailAndPassword($mail, $pass);
        return $cod;
    }
    
}
?>
