<?php
require_once APP_ROOT ."/app/AdminController.php";
class OrderController extends AdminController
{
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }
    function Index(){
        $order_in_db = $this-> unit_of_work->get_order()-> get_all();
        $orders = [];
        foreach ($order_in_db as $order){
            $order_detail = $this -> unit_of_work->get_order_detail() -> get_by_order_id($order -> get_id());
            $obj = [
            "order" => $order,
            "order_detail" => $order_detail
            ];
            array_push($orders, $obj);
        }
        return $this->view("Order/index", compact('orders'));
    }
}