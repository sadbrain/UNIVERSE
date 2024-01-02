<?php
require_once APP_ROOT . "/app/AppController.php";
class CheckoutController extends AppController
{
    function __construct($unit_of_work)
    {
        parent::__construct($unit_of_work);
    }
    function Index(){
       return $this -> view("Checkout/index");
    }
}


