<?php
require_once APP_ROOT ."/app/BaseController.php";
class HomeController extends BaseController
{

    function Index()
    {
        $product = $this->unit_of_work->get_product()->get_all();
        $category = $this->unit_of_work->get_category()->get_all();
        $product_image = $this->unit_of_work->get_product_image()->get_all();
        $product_inventory = $this->unit_of_work->get_product_inventory()->get_all();
        $discount = $this->unit_of_work->get_discount()->get_all();
        $order = $this->unit_of_work->get_order()->get_all();
        $order_detail = $this->unit_of_work->get_order_detail()->get_all();
        $payment_detail = $this->unit_of_work->get_payment_detail()->get_all();
        
        $view_body = $this->view();
        require_once $this -> use_layout($view_body);
        
    }
}
