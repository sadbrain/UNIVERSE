<?php
require_once APP_ROOT ."/app/AppController.php";
class ProductController extends AppController
{
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }
    function Index(?string $slug = null, $brand = null, $page = 1)
    {
        $slug_arr = explode("-",$slug);
        $category_id = $slug_arr[count($slug_arr)-1];
        $item_per_page = 9;
        $start = ($page - 1) * $item_per_page;   
        if($category_id == null || $category_id == 0){
            // th1
            $categories = $this -> unit_of_work ->get_category()->get_all();
            $category = $categories[0];
            $products_by_category = $this -> unit_of_work ->get_product() ->get_by_category_id($category -> get_id());
            if($brand != null){
                $arr = [];
                for($i = 0; $i < count($products_by_category); $i++){
                    $pro = $products_by_category[$i];
                    if($pro -> get_brand() != $brand){
                        continue;
                    }
                    array_push($arr, $pro);

                }
                $products_by_category = $arr;
            }

            $products = [];
            for($i = $start; $i < ($start + $item_per_page); $i++){
                
                if(!isset($products_by_category[$i])){
                    break;
                }

                $pro = $products_by_category[$i];
  

 
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

            if($brand != null){
                $arr = [];
                for($i = 0; $i < count($products_by_category); $i++){
                    $pro = $products_by_category[$i];
                    if($pro -> get_brand() != $brand){
                        continue;
                    }
                    array_push($arr, $pro);

                }
                $products_by_category = $arr;
            }

            for($i = $start; $i < ($start + $item_per_page); $i++){
                
                if(!isset($products_by_category[$i])){
                    break;
                }

                $pro = $products_by_category[$i];

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
        if($products_by_category != null)
            $num_of_pagination = ceil(count($products_by_category)/$item_per_page);
        else
            $num_of_pagination = 1;
        return $this->view("Product/index", compact("categories", "products", "brand", "category", "num_of_pagination", "page"));
        
    }

    public function Detail(?string $slug){
        $slug_arr = explode("-",$slug);
        $id = $slug_arr[count($slug_arr)-1];
        $product = $this-> unit_of_work -> get_product()->get($id);
        $discount = $this -> unit_of_work ->get_discount()->get_by_key("product_id", $id,1);
        $product_inventory = $this -> unit_of_work -> get_product_inventory()-> get_by_key("product_id", $id,1);

        $products_by_category = $this -> unit_of_work -> get_product() -> get_by_category_id($product-> get_category_id() ); 
        $products = [];
        $i = 0;
        foreach($products_by_category as $value){

            if($i++ == 12){
                break;
            }
            $discount_other = $this -> unit_of_work -> get_discount()-> get_by_key("product_id", $value -> get_id(), 1);
            $product_inventory_other  = $this -> unit_of_work -> get_product_inventory()-> get_by_key("product_id", $value-> get_id(),1);
            $obj = [
                "Product" => $value,
                "Discount" => $discount_other,
                "ProductInventory" => $product_inventory_other,
            ];
            array_push($products, $obj);

        }

        return $this->view("Product/detail", compact("product", "discount", "product_inventory", "products"));


    }
}
