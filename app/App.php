<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once "config/config.php";
require_once APP_ROOT. "/dataAccess/db.php";
require_once APP_ROOT. "/dataAccess/Repository/UnitOfWork.php";
require_once APP_ROOT. "/app/router/router.php";
require_once APP_ROOT. "/app/routes/routes.php";
class App{
    private Router $router;
    private PDO $db;
    public function run(){
        $unit_of_work = new UnitOfWork($this -> db);
        //lấy raw request
        $request = urldecode($_SERVER['REQUEST_URI']);
        //thực hiện request 
        $this -> router->forward($request, $unit_of_work);
    }
    public function use_router(){
        $this -> router = Router::get_router();
    }
    public function use_database($host, $name, $user_name, $pass){
        $this -> db = Db::get_db($host, $name, $user_name, $pass);
    }
}   