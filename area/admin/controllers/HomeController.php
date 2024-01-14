<?php
require_once APP_ROOT ."/app/AdminController.php";
class HomeController extends AdminController
{
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }
    function Index(){
  
        if (!isset($_SESSION['user_id']) || $_SESSION["user_id"] != 1) {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            $_SESSION["info"] = "You have to login";
            HomeController::redirect("/Admin/Account/Login");
            exit();
        }
        return $this->view("Home/index");
    }
}