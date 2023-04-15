<?php
require_once(CONTROL_BO . '/UserBO.php');
require_once(TO         . '/UseuserTO.php');
require_once(UTIL       . '/Functions.lib.php');

function createUser ($d, $msg_ret, $data_ret) {
    @session_start();
    
    $userBO = new backEnd\control\facade\bo\UserBO();
    
    $d = explode('@@@', $d);
    $userTO = new UseuserTO();
    $userTO->setdcname(subAccentPerAnsi(trim($d[0])));
    $userTO->setdcmail(trim($d[1]));
    $userTO->setdcpass(trim($d[2]));
    $userTO->setcostatus(0);
    $userTO->setdtcreated(date('Y-m-d H:i:s'));
    
    $userBO->createUser($userTO);
    
    readUsers('', 'Usuário criado com Sucesso.', '');
}

function readUsers ($d, $msg_ret, $data_ret) {
    @session_start();
    
    $userBO         = new backEnd\control\facade\bo\UserBO();    
    $list_of_users  = $userBO->readUsers();
    
    require_once(VIEW . '/user/user.View.php');
    userView($list_of_users, $msg_ret, '');
    exit();
}

function updateUser ($d, $msg_ret, $data_ret) {
    @session_start();
    
    $userBO = new backEnd\control\facade\bo\UserBO();
    
    $d = explode('@@@', $d);
    if ($d[0] == 0) {
        $cod = trim($d[1]);
        
        $userTO = $userBO->readByCodUser($cod);
        
        require_once(VIEW . '/user/userUpdate.View.php');
        userUpdateView($userTO, $msg_ret, '');
        exit();
    } else if ($d[0] == 1) {
        $userTOOld = $userBO->readByCodUser(trim($d[1]));
        
        $userTO = new UseuserTO();
        $userTO->setcouseuser(trim($d[1]));
        $userTO->setdcname(subAccentPerAnsi(trim($d[2])));
        $userTO->setdcmail(trim($d[3]));
        $userTO->setdcpass(trim($d[4]));
        $userTO->setcostatus(trim($d[5]));
        $userTO->setdtcreated($userTOOld->getdtcreated());
        
        $userBO->updateUser($userTO);
        
        readUsers('', 'Usuário atualizado com Sucesso.', '');
    }
}

function deleteUser ($d, $msg_ret, $data_ret) {
    @session_start();
    
    $userBO = new backEnd\control\facade\bo\UserBO();
    $userBO->deleteUser(trim($d));
    
    readUsers('', 'Usuário deletado com Sucesso.', '');
}
?>
