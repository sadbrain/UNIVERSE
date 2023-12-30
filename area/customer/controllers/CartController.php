<?php
require_once APP_ROOT ."/app/BaseController.php";
require_once APP_ROOT ."/app/BaseController.php";
class CartController extends BaseController
{

    function Index()
    {
        // print_r($id);
        // print_r($query);
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body);

    }

}
