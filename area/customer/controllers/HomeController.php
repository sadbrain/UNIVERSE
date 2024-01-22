<?php
require_once APP_ROOT ."/app/AppController.php";
class HomeController extends AppController
{
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }
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
        $product_best_rating = $this -> unit_of_work -> get_product() ->get_product_best_rating_of_month(); 
        return $this->view("Home/index", compact('products', 'product_best_rating'));
        
    }
    function Aboutus()
    {
        return $this->view("Home/aboutus");
        
    }
}
