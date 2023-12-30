<?php
require_once APP_ROOT ."/app/BaseController.php";
class HomeController extends BaseController
{

    function Index()
    {
        $products_best_sellers = $this -> unit_of_work ->get_product() ->get_product_best_seller();
        $products = [];
        foreach($products_best_sellers as $pro){
            $discount = $this -> unit_of_work -> get_discount() -> get_by_key("product_id",$pro ->get_id(),1);
            $product_inventory = $this -> unit_of_work -> get_product_inventory() -> get_by_key("product_id", $pro -> get_id(), 1);
            $obj = [
                "Product" => $pro,
                "Discount" => $discount,
                "ProductInventory" => $product_inventory,
            ];
            array_push($products, $obj);
        }
        
        $view_body = $this->view();
        require_once $this -> use_layout($view_body);
        
    }
}
