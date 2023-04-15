<?php
namespace backEnd\control\facade\bo;

require_once(MODEL_DAO      . '/SessionDAO.php');

use backEnd\model\dao\SessionDAO;

class SessionBO {
    
    public function updateSessionByUser($session, $cod) {
        $sessionDAO = new SessionDAO();
        $sessionDAO->updateSessionByUser($session, $cod);
    }
    
    public function verifySession($session) {
        $sessionDAO = new SessionDAO();
        $logado = $sessionDAO->verifySession($session);
        return $logado;
    }
    
}
?>
