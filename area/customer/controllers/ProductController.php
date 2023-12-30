<?php
require_once APP_ROOT ."/app/BaseController.php";
class ProductController extends BaseController
{
    function Index(?int $category_id = null)
    {
        // print_r($id);
        // print_r($query);
        if($category_id == null || $category_id == 0){
            // th1
            $categories = $this -> unit_of_work ->get_category()->get_all();
            $category = $categories[0];
            $products_by_category = $this -> unit_of_work ->get_product() ->get_by_category_id($category -> get_id());
            $products = [];
            foreach($products_by_category as $pro){
                $discount = $this -> unit_of_work -> get_discount() -> get_by_key("product_id",$pro ->get_id(),1);
                $product_inventory = $this -> unit_of_work -> get_product_inventory() -> get_by_key("product_id", $pro -> get_id(), 1);
                $obj = [
                    "Product" => $pro,
                    "Discount" => $discount,
                    "ProductInventory" => $product_inventory,
                ];
                array_push($products, $obj);
            }
            // var_dump($category-> get_id());
            // var_dump($products[3] -> get_category_id());
        }else{
            // th2
            $categories = $this -> unit_of_work ->get_category() ->get_all();
            $category = $this -> unit_of_work -> get_category() -> get($category_id);
            $products_by_category = $this -> unit_of_work -> get_product() ->get_by_category_id($category_id);
            $products = [];
            foreach($products_by_category as $pro){
                $discount = $this -> unit_of_work -> get_discount() -> get_by_key("product_id",$pro ->get_id(),1);
                $product_inventory = $this -> unit_of_work -> get_product_inventory() -> get_by_key("product_id", $pro -> get_id(), 1);
                $obj = [
                    "Product" => $pro,
                    "Discount" => $discount,
                    "ProductInventory" => $product_inventory,
                ];
                array_push($products, $obj);
            }

        }
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body);
        

    }
    public function Detail(?int $id){
        $product = $this-> unit_of_work -> get_product()->get($id);
        $discount = $this -> unit_of_work ->get_discount()->get_by_key("product_id", $id,1);
        $product_inventory = $this -> unit_of_work -> get_product_inventory()-> get_by_key("product_id", $id,1);

        $products_by_category = $this -> unit_of_work -> get_product() -> get_by_category_id($product-> get_category_id() ); 
        $products = [];
        foreach($products_by_category as $value){
            $discount_other = $this -> unit_of_work -> get_discount()-> get_by_key("product_id", $value -> get_id(), 1);
            $product_inventory_other  = $this -> unit_of_work -> get_product_inventory()-> get_by_key("product_id", $value-> get_id(),1);
            $obj = [
                "Product" => $value,
                "Discount" => $discount_other,
                "ProductInventory" => $product_inventory_other,
            ];
            array_push($products, $obj);

        }


        $view_body = $this -> view();
        require_once $this -> use_layout($view_body);


    }
}
