<?php
require_once APP_ROOT ."/app/BaseController.php";
class HomeController extends BaseController
{

    function Index(){
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body, "admin");
    }
}