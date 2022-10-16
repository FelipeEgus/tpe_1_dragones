<?php
include_once ('app/controllers/tablaController.php');
include_once ('app/controllers/userController.php');
include_once ('app/controllers/mitologiaController.php');
include_once ('tabla.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}else {
    $action = 'home';
}

$params = explode('/', $action);
$controller= new tablaController();
$userController = new userController();
$mitologiaController= new mitologiaController();

if($params[0] ==='home' || $params[0] === ''){
    $mitologiaController->showHeader();
    $controller->showTabla();
    $mitologiaController->showFooter();
}elseif($params[0] ==='mitologia'){
    $controller->showMitologia($params[1]);
}elseif($params[0] ==='dragon'){
    $controller->showDragonId($params[1]);    
}elseif($params[0] ==='addDragon'){
    $controller->addDragonTabla();
}elseif($params[0] ==='deleteDragon'){
    $controller->deleteDragonTabla($params[1]);
}elseif($params[0] ==='editarDatosDragon'){
    $controller->showEditDragonTabla($params[1]);
    $mitologiaController->showEditMitologiaTabla();
}elseif($params[0] ==='editarDragon'){
    $controller->editDragon($params[1]); 
}elseif($params[0] ==='tablaMitologia'){
    $mitologiaController->homeMitologia();
}elseif($params[0] ==='addMitologia'){
    $mitologiaController->addMitologiaTabla(); 
}elseif($params[0] ==='deleteMitologia'){
    $mitologiaController->deleteMitologiaTabla($params[1]);
}elseif($params[0] ==='editarDatosMitologia'){
    $mitologiaController->showEditMitologia($params[1]);
}elseif($params[0] ==='editarMitologia'){
    $mitologiaController->editMitologia($params[1]); 
}elseif($params[0] ==='login'){
    $userController->showLogin();
}elseif($params[0] ==='validar'){
    $userController->validateUser(); 
}elseif($params[0] ==='registrar'){
    $userController->addMail(); 
}elseif($params[0] ==='logout'){
    $userController->logout(); 
}else{
    echo('404 Page not found');
}


