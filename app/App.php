<?php
// Should use composer autoload
require_once "app/core/env.php";
require_once "app/core/common.php";
require_once "config/config.php";
require_once "app/core/debug.php";
require_once APP_ROOT. "/dataAccess/db.php";
require_once APP_ROOT. "/dataAccess/Repository/UnitOfWork.php";
require_once APP_ROOT. "/app/router/router.php";
require_once APP_ROOT. "/app/routes/routes.php";

class App{
    private Router $router;
    private PDO $db;
    public function run(){
        $this -> use_database();

        $this -> use_router();

        $this -> build_router();
        
    }
    
    private function use_database(){
        $this -> db = Db::get_db(DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    private function use_router(){
        $this -> router = Router::get_router();
    }

    private function build_router(){
        $unit_of_work = new UnitOfWork($this -> db);
        //lấy raw request
        $request = urldecode($_SERVER['REQUEST_URI']);
        //thực hiện request 
        $this -> router->forward($request, $unit_of_work);
    }
}   