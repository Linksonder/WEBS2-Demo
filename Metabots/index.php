<?php

//Enige plek waar we include
include './controller/MetabotController.php';
include './model/Metabot.php';

session_start();

$controller = new MetabotController();
$action = $_GET['action'];

switch($action)
{
    case 'list': return $controller->show_all();
    case 'form': return $controller->add_metabot_form();
    case 'store': return $controller->add_metabot();
    case 'login': return $controller->login();
    case 'loginform': return $controller->login_form();

    default: return $controller->show_all();
}
