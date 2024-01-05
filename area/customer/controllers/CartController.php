<?php
require_once APP_ROOT . "/app/AppController.php";
class CartController extends AppController
{
    function __construct($unit_of_work)
    {
        parent::__construct($unit_of_work);
    }
    function Index(){
       return $this -> view("Cart/index");
    }
    
}


