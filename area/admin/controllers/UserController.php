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
}