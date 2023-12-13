<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "config/config.php";   
require_once "router/router.php";
require_once "routes/routes.php";
//NamWeb/controller/action?id=1&name=2;
$router = Router::get_router();

// print_r($router->get_routing_table());
$request = urldecode($_SERVER['REQUEST_URI']);  
$router->forward($request);

// var_dump($router->get_routing_table());
?>