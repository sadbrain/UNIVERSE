<?php
require_once APP_ROOT ."/app/AdminController.php";
class AccountController extends AdminController
{   
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }

    function Login(){
        return $this -> view("Account/login");
    }
    function LoginPost(){

        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        $user = $this -> unit_of_work -> get_user() -> login($email, $password);

        if($user == null){
            return $this -> view("Account/login");

        }else{
            session_start();
            $_SESSION["user_id"] = $user -> get_id();
            $_SESSION["success"] = "Login is successfully";
            if($user -> get_role() == "user"){
                AccountController :: redirect('/');

            }else{
                AccountController :: redirect('/Admin/Home');
            }
        }
    }
    function Logout(){
        session_start();
        unset($_SESSION['user_id']);
        AccountController :: redirect('/');
    }
}