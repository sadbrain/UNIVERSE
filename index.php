<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "config/config.php";
require_once "dataAccess/db.php";
require_once "dataAccess/Repository/UnitOfWork.php";
require_once "router/router.php";
require_once "routes/routes.php";

//NamWeb/controller/action?id=1&name=2;
//gọi ra đối tượng router
$router = Router::get_router();
//kết nối db
$db = Db::get_db();
//đưa db vào unit_of_work và sử dụng repository pattern
$unit_of_work = new UnitOfWork($db);

//lấy raw request
$request = urldecode($_SERVER['REQUEST_URI']);
//thực hiện request
$router->forward($request, $unit_of_work);
