<?php
require_once(CONTROL_BO . '/SessionBO.php');

function index ($d, $msg_ret, $data_ret) {
    @session_start();
    
    $sessionBO = new backEnd\control\facade\bo\SessionBO();
    $logado = $sessionBO->verifySession($_SESSION['kv']['ss']);
    
    if ($logado == 0) {
        require_once(VIEW . '/index/index.View.php');
        indexView('', '', '');
        exit();
    } else if ($logado != 0) {
        require_once(VIEW . '/main/main.View.php');
        main('', '', '');
        exit();
    }
}
?>
