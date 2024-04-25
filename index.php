<?php

require_once 'config.php';
require_once 'controller/UserController..php';
require_once 'modele/UserModel.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'login';

$userModel = new UserModel($db);
$userController = new UserController($userModel);

switch($action) {
    case 'register':
        $userController->register();
        break;
    case 'login':
        $userController->login();
        break;
    default:
        echo "404 Not Found";
        break;
}

?>
