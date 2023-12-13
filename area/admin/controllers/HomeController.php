<?php
class HomeController {
    function index(){
        echo "hello";
        require_once "views/Home/index.php";
        echo "end";
        
    }
}