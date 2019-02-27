<?php

//Enige plek waar we include
include './controller/MetabotController.php';
include './model/Metabot.php';


$controller = new MetabotController();
$controller->show_all();
