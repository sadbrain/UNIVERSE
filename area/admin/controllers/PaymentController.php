<?php
require_once APP_ROOT ."/app/AdminController.php";
class PaymentController extends AdminController
{   
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }

    function Index(){
        $payments = $this-> unit_of_work->get_payment_detail()-> get_all();
        return $this->view("Payment/index", compact('payments'));
    }
    public function GetAll()
    {
        $payments = $this-> unit_of_work->get_payment_detail()-> get_all();
        $this->json(["data" => $payments]);
    }
}