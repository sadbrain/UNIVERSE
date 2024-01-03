<?php
require_once APP_ROOT ."/app/AdminController.php";
class HomeController extends AdminController
{
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }
    function Index(){
        session_start();
        if (!isset($_SESSION['username'])) {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            $_SESSION["info"] = "You have to login";
            HomeController::redirect("/Admin/Account/Login");
            exit();
        }
        return $this->view("Home/index");
    }
}