<?php
require_once APP_ROOT ."/app/BaseController.php";
require_once APP_ROOT ."/models/vm/ProductVM.php";
class ProductController extends BaseController
{   

    public function Index(){
        // $categories = $this -> unit_of_work -> get_category() -> get_all();
        // $categories = $this -> unit_of_work -> get_category() -> get_all();
        $products = $this -> unit_of_work -> get_product() -> get_all();
        $productvm_list = [];
        foreach ($products as $product){
            $product_id = $product->get_id();
            $category = $this -> unit_of_work -> get_category() -> get($product -> get_category_id());
            $product -> set_Category($category);

            $product_inventory = $this -> unit_of_work -> get_product_inventory() -> get_by_key("product_id", $product_id, 1);
            $discount = $this -> unit_of_work -> get_discount() -> get_by_key("product_id", $product_id, 1);
            $product_images = $this -> unit_of_work -> get_product_image() -> get_by_key("product_id", $product_id);

            $productvm = new ProductVM($product, $product_inventory, $product_images, $discount);
            array_push($productvm_list, $productvm);
        }
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body,"admin");

    }
    
    
}