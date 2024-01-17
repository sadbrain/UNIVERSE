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

    function Register(){
        return $this -> view("Account/register");
    }

    function RegisterPost(){
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        $con_password = isset($_POST['con_password']) ? $_POST['con_password'] : "";

        $valid_array = $this -> ValidateRegister($name,$email, $password, $con_password);
        $errors = $valid_array['message_error'];
        if($valid_array['is_valid']){
            $user = $this -> unit_of_work -> get_user()->get_by_email($email);
            if ($user == null){
                $new_user = new User();
                $new_user -> set_name($name);
                $new_user -> set_email($email);
                $new_user -> set_password($password);
                $new_user -> set_role("user");
                $new_user -> set_created_at(new DateTime());
                $new_user -> set_created_by(1);
                $this -> unit_of_work ->get_user() -> add($new_user);
                $_SESSION["success"]="Account created successfully";
                AccountController :: redirect('/Customer/Account/Login');

            }else{
                $_SESSION["errors"]="Account is exitst";
                AccountController :: redirect('/Customer/Account/Register');
            }
        }else{
            return $this -> view("Account/Register", compact("errors"));
        }
    }

    function ValidateRegister($name, $email, $password, $con_password){
        $errors = [
            "name" => "",
            "email" => "",
            "password" => "",
            "con_password" => "",
        ];
        $is_valid = true;

        if(!strpos($email, "@")){
            $errors['email'] = "Invalid email";
            $is_valid = false;
        }
        if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/\d/', $password) || !preg_match('/[^A-Za-z\d]/', $password)) {
            $errors['password'] = "At least 1 number, including upper and lower case letters, one special character, at least 8 characters";
            $is_valid = false;
        }
        if($password != $con_password ){
            $errors['con_password']= "Password incorrect. Please re-enter";
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
        if($name == ""){
            $errors['name'] = "This field is required";
            $is_valid = false;
        }
        if($con_password == ""){
            $errors['con_password'] = "This field is required";
            $is_valid = false;
        }
        return ["message_error" => $errors,
                "is_valid" => $is_valid];
    }
}