<?php
require_once APP_ROOT ."/app/AdminController.php";
class AccountController extends AdminController
{   
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }

    public function Login(){
        // $categories = $this -> unit_of_work -> get_category() -> get_all();
        return $this->view("Account/login");

    }
   public function LoginPost(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $username = isset($_POST["username"]) ? $_POST["username"] : "";
            $password = isset($_POST["password"]) ? $_POST["password"] : "";
            if($username == "admin" && $password == "Admin@123"){
                $_SESSION["success"] = "Login is successfully";
                $_SESSION["username"] = $username;
                AccountController::redirect("/Admin/Home");
            }else{
                $_SESSION["error"] = "Wrong password or username";
                AccountController::redirect("/Admin/Account/Login");
            }
        }else{
            AccountController::redirect("/Admin/Account/Login");
        }
    }
    public function Logout(){
        session_start();
        if(isset($_SESSION["username"])){
            unset($_SESSION["username"]);
            $_SESSION["success"] = "Logout is successfully";
            AccountController::redirect("/Admin/Account/Login");
        }
       
        
    }
    
}