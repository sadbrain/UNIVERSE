<?php
require_once APP_ROOT ."/app/AdminController.php";
class HomeController extends AdminController
{
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }
    function Index(){
        return $this->view("Home/index");
    }
}