<?php
if ($_SERVER['HTTP_HOST'] != 'localhost') {
    if(!$_SERVER['HTTPS']) { header("Location: https://".$_SERVER['SERVER_NAME']); }
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);

require_once($_SERVER['DOCUMENT_ROOT']  . '/../whiteList/backEnd/util/Constants.inc.php');
require_once(UTIL                       . '/SecurityUtil.php');

$secUtil = new SecurityUtil();
$secUtil->authenticateSession();

if (count($_GET) != 0 || count($_POST) != 0) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $u = htmlspecialchars($_POST['u'], ENT_QUOTES, 'UTF-8');
        $d = htmlspecialchars($_POST['d'], ENT_QUOTES, 'UTF-8');
    } else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $u = htmlspecialchars($_GET['u'], ENT_QUOTES, 'UTF-8');
        $d = htmlspecialchars($_GET['d'], ENT_QUOTES, 'UTF-8');
    }
    
    $u = isset($u) ? $u : null;
    if (isset($u) && $u != '') 	{
        $u = explode('/', $u);
        if (file_exists(CONTROL_FACADE.'/'.$u[0].'.php')) {
            require_once(CONTROL_FACADE.'/'.$u[0].'.php');
            $u[1]($d, '', '');
            exit();
        }
    }
    
    require_once(CONTROL_FACADE.'/IndexFacade.php');
    index('', '', '');
    exit();    
} else {
    require_once(CONTROL_FACADE.'/IndexFacade.php');
    index('', '', '');
    exit();
}
?>
