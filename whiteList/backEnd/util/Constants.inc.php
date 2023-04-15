<?php
$proj = 'projetomvc';
$path_jail = $_SERVER['DOCUMENT_ROOT'].'/../'.$proj.'-jail';


// BackEnd - Control Layer
define('CONTROL_FACADE',    $path_jail . '/backEnd/control/facade');
define('CONTROL_BO',        $path_jail . '/backEnd/control/facade/bo');

// BackEnd - Model Layer
define('MODEL_DAO',         $path_jail . '/backEnd/model/dao');

// BackEnd - Transfer Object's
define('TO',                $path_jail . '/backEnd/to');

// BackEnd - Util Object's
define('UTIL',              $path_jail . '/backEnd/util');

// FrontEnd - View's
define('VIEW',              $path_jail . '/frontEnd');
define('VIEW_INC',          $path_jail . '/frontEnd/_inc');
define('VIEW_COLOR',        '#2e2e2e');
define('VIEW_PROJECT',      'Projeto MVC');

?>
