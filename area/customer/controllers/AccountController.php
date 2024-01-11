<?php
require_once APP_ROOT . "/app/AppController.php";
class AccountController extends AppController
{
    function __construct($unit_of_work)
    {
        parent::__construct($unit_of_work);
    }
    function Login(){
        return $this -> view("Account/login");
    }
    function LoginPost(){

        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";

        $valid_array = $this -> ValidateLogin($email, $password);
        $errors = $valid_array['message_error'];
        if($valid_array['is_valid']){
            $user = $this -> unit_of_work -> get_user() -> login($email, $password);
            if($user == null){
                echo "Login is not successfully";
                return $this -> view("Account/login",compact("errors"));

            }else{
                session_start();
                $_SESSION["user_id"] = $user -> get_id();
                echo "Login is successfully";
                if($user -> get_role() == "user"){
                    AccountController :: redirect('/');

                }else{
                    AccountController :: redirect('/Admin/Home');

                }
                
            }
        }else{
            return $this -> view("Account/login",compact("errors"));
        }
    }
    function ValidateLogin($email, $password){
        $errors = [
            "email" => "",
            "password" => "",
        ];
        $is_valid = true;


        if(!strpos($email, "@")){
            $errors['email'] = "Invalid email";
            $is_valid = false;
        }
        if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/\d/', $password) || !preg_match('/[^A-Za-z\d]/', $password)) {
            $errors['password'] = "at least 1 number, including upper and lower case letters, one special character, at least 8 characters";
            $is_valid = false;
        }
        if($email == ""){
            $errors['email'] = "This field is required";
            $is_valid = false;
        }
        if($password == ""){
            $errors['password'] = "This field is required";
            $is_valid = false;
        }

        return ["message_error" => $errors,
                "is_valid" => $is_valid];
    }
    function Logout(){
        session_start();
        unset($_SESSION['user_id']);
        AccountController :: redirect('/');
        
    }
}