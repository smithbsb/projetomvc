<?php
require_once(CONTROL_BO . '/SessionBO.php');
require_once(CONTROL_BO . '/LoginBO.php');
require_once(CONTROL_BO . '/UserBO.php');
require_once(TO         . '/UseuserTO.php');
require_once(UTIL       . '/SecurityUtil.php');

function login ($d, $msg_ret, $data_ret) {
    @session_start();
    
    $sessionBO  = new backEnd\control\facade\bo\SessionBO();
    $loginBO    = new backEnd\control\facade\bo\LoginBO();
    $userBO     = new backEnd\control\facade\bo\UserBO();
    
    $dados      = explode('@@@', $d);
    $mail       = $dados[0];
    $pass       = $dados[1];
    
    $cod        = $loginBO->consultUserByMailAndPassword($mail, $pass);  
    
    if (isset($cod)) {
        $userTO = $userBO->readByCodUser($cod);
        
        if ($userTO->getcostatus() == 0) {
            require_once(VIEW . '/index/index.View.php');
            indexView('', 'Usuário encontra-se inativo, contate o administrador.', '');
            exit();
        } else if ($userTO->getcostatus() == 1) {
            $_SESSION['kv']['uu'] = $userTO->getcouseuser();
            $sessionBO->updateSessionByUser($_SESSION['kv']['ss'], $userTO->getcouseuser());
            
            require_once(VIEW . '/main/main.View.php');
            main('', '', '');
            exit();
        } else {
            require_once(VIEW . '/index/index.View.php');
            indexView('', 'Erro inexperado. Aguarde Contato do Administrador.', '');
            exit();
        }
    } else {
        require_once(VIEW . '/index/index.View.php');
        indexView('', 'Dados inválidos, tente novamente.', '');
        exit();
    }
}

function logout ($d, $msg_ret, $data_ret) {
    @session_start();
    $_SESSION['kv']['uu'] = 0;
    
    $sessionBO = new backEnd\control\facade\bo\SessionBO();
    $sessionBO->updateSessionByUser($_SESSION['kv']['ss'], 0);
    
    require_once(VIEW . '/index/index.View.php');
    indexView('', 'Sua sessão foi encerrada.', '');
    exit();
}
?>
