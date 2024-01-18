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
        $start_date = new DateTime(START_DATE);
        $current_date = new DateTime();
        $num = $this->unit_of_work->get_order()->get_num_order($start_date->format('Y-m-d H:i:s'), $current_date->format('Y-m-d H:i:s'));
        $total_order= $num["order_count"];
        $num = $this->unit_of_work->get_order()->get_total_revenue_order($start_date->format('Y-m-d H:i:s'), $current_date->format('Y-m-d H:i:s'));
        $total_revenue= $num["total_revenue"];
        $num = $this->unit_of_work->get_order()->get_num_order($current_date->format('Y-m-01 0:0:0'), $current_date->format('Y-m-t 23:59:59'));
        $total_order_current_month = $num["order_count"];
        $num = $this->unit_of_work->get_order()->get_total_revenue_order($current_date->format('Y-m-01 0:0:0'), $current_date->format('Y-m-t 23:59:59'));
        $total_revenue_current_month = $num["total_revenue"];
        return $this->view("Home/index", compact('total_revenue', 'total_revenue_current_month', 'total_order', 'total_order_current_month'));
    }
    public function GetOrderDaily(){
        $order_chart = "Daily order quantity statistics"; 
        $count_orders = [];
        $label = [];
        $current_date = new DateTime();
        $first_date_of_month = new DateTime($current_date->format('Y-m-01 0:0:0'));
        $last_date_of_month = new DateTime($current_date->format('Y-m-t 23:59:59'));
        $first_date_num = intval($first_date_of_month -> format("d"));
        $last_date_num = intval($last_date_of_month -> format("d"));
        for($i = $first_date_num; $i <= $last_date_num; $i++){
            $start = new DateTime($current_date->format('Y-m-'.$i.' 0:0:0'));
            $end = new DateTime($current_date->format('Y-m-'.$i.' 23:59:59'));
            $num = $this->unit_of_work->get_order()->get_num_order($start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s'));
            array_push($count_orders, $num["order_count"]); 
            array_push($label, $i); 
        }
        return $this -> json([
            "order_count" => $count_orders,
            "order_chart" => $order_chart,
            "label" => $label,
        ]);
    }

    public function GetHitsDaily(){
        $hit_chart = "Daily hit quantity statistics"; 
        $count_hits = [];
        $label = [];
        $current_date = new DateTime();
        $first_date_of_month = new DateTime($current_date->format('Y-m-01 0:0:0'));
        $last_date_of_month = new DateTime($current_date->format('Y-m-t 23:59:59'));
        $first_date_num = intval($first_date_of_month -> format("d"));
        $last_date_num = intval($last_date_of_month -> format("d"));
        for($i = $first_date_num; $i <= $last_date_num; $i++){
            $start = new DateTime($current_date->format('Y-m-'.$i.' 0:0:0'));
            $end = new DateTime($current_date->format('Y-m-'.$i.' 23:59:59'));
            $num = $this->unit_of_work->get_user_access()->get_num_user_access($start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s'));
            array_push($count_hits, $num["user_access_count"]); 
            array_push($label, $i); 
        }
        return $this -> json([
            "hit_count" => $count_hits,
            "hit_chart" => $hit_chart,
            "label" => $label,
        ]);
    }
    public function GetOrderMonthly(){
        $order_chart = "Monthly order quantity statistics"; 
        $count_orders = [];
        $label = [];
        $current_date = new DateTime();
        for($i = 1; $i <= 12; $i++){
            $date_time = new DateTime($current_date -> format('Y-'.$i.'-d'));
            $start = new DateTime($date_time->format('Y-'.$i.'-01 '.' 0:0:0'));
            $end = new DateTime($date_time->format('Y-'.$i.'-t '.' 23:59:59'));
            $num = $this->unit_of_work->get_order()->get_num_order($start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s'));
            array_push($count_orders, $num["order_count"]); 
            array_push($label, $i);     
        }
        return $this -> json([
            "order_count" => $count_orders,
            "order_chart" => $order_chart,
            "label" => $label,
        ]);
    }

    public function GetHitsMonthly(){
        $hit_chart = "Monthly hit quantity statistics"; 
        $count_hits = [];
        $label = [];
        $current_date = new DateTime();
        for($i = 1; $i <= 12; $i++){
            $date_time = new DateTime($current_date -> format('Y-'.$i.'-d'));
            $start = new DateTime($date_time->format('Y-'.$i.'-01 '.' 0:0:0'));
            $end = new DateTime($date_time->format('Y-'.$i.'-t '.' 23:59:59'));
            $num = $this->unit_of_work->get_user_access()->get_num_user_access($start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s'));
            array_push($count_hits, $num["user_access_count"]); 
            array_push($label, $i);     
        }
        return $this -> json([
            "hit_count" => $count_hits,
            "hit_chart" => $hit_chart,
            "label" => $label,
        ]);
    }

    public function GetOrderYearly(){
        $order_chart = "Yearly order quantity statistics"; 
        $count_orders = [];
        $label = [];
        $start_date = new DateTime(START_DATE);
        $current_date = new DateTime();
        $start_year = intval($start_date->format('Y'));
        $current_year = intval($current_date->format('Y'));
        for($i = $start_year; $i <= $current_year; $i++){
            $start = new DateTime($i.'-01-01'.' 0:0:0');
            $end = new DateTime($start->format('Y-12-t 23:59:59'));
            $num = $this->unit_of_work->get_order()->get_num_order($start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s'));
            array_push($count_orders, $num["order_count"]); 
            array_push($label, $i);     
        }
        return $this -> json([
            "order_count" => $count_orders,
            "order_chart" => $order_chart,
            "label" => $label,
        ]);
    }

    public function GetHitsYearly(){
        $hit_chart = "Yearly hit quantity statistics"; 
        $count_hits = [];
        $label = [];
        $start_date = new DateTime(START_DATE);
        $current_date = new DateTime();
        $start_year = intval($start_date->format('Y'));
        $current_year = intval($current_date->format('Y'));
        for($i = $start_year; $i <= $current_year; $i++){
            $start = new DateTime($i.'-01-01'.' 0:0:0');
            $end = new DateTime($start->format('Y-12-t 23:59:59'));
            $num = $this->unit_of_work->get_user_access()->get_num_user_access($start->format('Y-m-d H:i:s'), $end->format('Y-m-d H:i:s'));
            array_push($count_hits, $num["user_access_count"]); 
            array_push($label, $i);     
        }
        return $this -> json([
            "hit_count" => $count_hits,
            "hit_chart" => $hit_chart,
            "label" => $label,
        ]);
    }
}