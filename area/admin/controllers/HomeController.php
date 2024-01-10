<?php
require_once APP_ROOT ."/app/AdminController.php";
class HomeController extends AdminController
{
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }
    function Index(){
        // session_start();
        // if (!isset($_SESSION['username'])) {
        //     // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        //     $_SESSION["info"] = "You have to login";
        //     HomeController::redirect("/Admin/Account/Login");
        //     exit();
        // }


        $start_date = new DateTime(START_DATE);
        $current_date = new DateTime();
        $first_day_of_year = new DateTime($current_date->format('Y-01-01'));
        $first_day_of_month = new DateTime($current_date->format('Y-m-01'));
        echo "<pre>";
        var_dump($start_date);
        var_dump($current_date);
        var_dump($first_day_of_year);
        var_dump($first_day_of_month);
        echo "</pre>";
        $order_label = isset($_GET["order_label"]) ? $_GET["order_label"] : "daily order";
            
        // $order_chart = [
        //     "title" =>  $order_label,
        //     "labels" => $order_labels,
        //     "values" => $order_values
        // ];

        // return $this->view("Home/index");
    }
}