<?php
require_once APP_ROOT ."/app/AdminController.php";
class UserController extends AdminController
{
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }
    function Index(){
        $users = $this-> unit_of_work -> get_user() -> get_all();

        return $this->view("User/index",compact("users"));
    }
    function Create(){
        return $this-> view("User/create");
    }
    function CreatePost(){
        $user = new User();
        $this-> unit_of_work -> get_user() -> to_user($user, $_POST);
        $user -> set_role("user");
        $user -> set_created_at(new DateTime());
        $user -> set_created_by(1);
        $this -> unit_of_work -> get_user() -> add($user);
        $_SESSION["success"]="User created successfully";
        UserController :: redirect("/Admin/User");


    }
}