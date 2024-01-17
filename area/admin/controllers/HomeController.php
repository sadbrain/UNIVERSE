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
        $count_orders = [];
        $label = [];
        $current_date = new DateTime();
        $first_date_of_month = new DateTime($current_date->format('Y-01-01 0:0:0'));
        $last_date_of_month = new DateTime($current_date->format('Y-m-t 23:59:59'));
        $first_date_num = intval($first_date_of_month -> format("d"));
        $last_date_num = intval($last_date_of_month -> format("d"));
        for($i = $first_date_num; $i < $last_date_num; $i++){
            $start = new DateTime($current_date->format('Y-m-'.$i.' 0:0:0'));
            $end = new DateTime($current_date->format('Y-m-'.$i.' 23:59:59'));
            $num = $this->unit_of_work->get_order()->get_num_order($start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s'));
            array_push($count_orders, $num["order_count"]); 
            array_push($label, $i); 
        }
        return $this->view("Home/index", compact("label", "count_orders"));
    }
}