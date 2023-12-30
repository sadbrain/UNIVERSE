<?php
require_once APP_ROOT ."/app/BaseController.php";
class CheckoutController extends BaseController
{
 

    public function Index(){
        require_once $this->view();

    }
}
