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
    public function Upsert(?int $id = null){
        $categories = $this -> unit_of_work -> get_category() -> get_all();
        if($id == null || $id == 0){

            $product = new Product();
            $product_inventory = new ProductInventory();
            $product_images = [];
            $discount = new Discount();
            $productvm = new ProductVM($product, $product_inventory, $product_images, $discount);
        } else{
            $product = $this -> unit_of_work -> get_product() -> get($id);
            $category = $this -> unit_of_work -> get_category() -> get($product -> get_category_id());
            $product -> set_category($category);
            $product_inventory = $this -> unit_of_work -> get_product_inventory() -> get_by_key("product_id", $product -> get_id(), 1);
            $product_images = $this -> unit_of_work -> get_product_image() -> get_by_key("product_id", $product -> get_id());
            $discount = $this -> unit_of_work -> get_discount() -> get_by_key("product_id", $product -> get_id(), 1);
            $productvm = new ProductVM($product, $product_inventory, $product_images, $discount);
    
        }
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body,"admin");
    }

    public function UpsertPost(?int $id = null){
        // var_dump($_POST);

        $product = new Product();
        $discount = new Discount();
        $product_inventory = new ProductInventory();
        $this -> unit_of_work -> get_product() -> to_product($product, $_POST["Product"]);
        $this -> unit_of_work -> get_discount() -> to_discount($discount, $_POST["Discount"]);
        $this -> unit_of_work -> get_product_inventory() -> to_product_inventory($product_inventory, $_POST["ProductInventory"]);
        //create product
        if($id == null || $id == 0){
            $product -> set_created_at(new DateTime());
            $product -> set_created_by(1);
            $product -> set_slug($product -> create_slug($product -> get_name()));
            $this -> unit_of_work -> get_product() -> add($product);
            $product_in_db =  $this -> unit_of_work -> get_product()->get_last_entity();
            // var_dump($product);
            $product_inventory -> set_created_at(new DateTime());
            $product_inventory -> set_created_by(1);
            $product_inventory -> set_product_id((int) $product_in_db -> get_id());
            $this -> unit_of_work -> get_product_inventory() -> add($product_inventory);

            $discount -> set_created_at(new DateTime());
            $discount -> set_created_by(1);
            $discount -> set_product_id((int) $product_in_db -> get_id());
            $this -> unit_of_work -> get_discount() -> add($discount);
            
        }else{
            $product -> set_id($id);
            $product -> set_updated_at(new DateTime());
            $product -> set_updated_by(1);
            $product -> set_slug($product -> create_slug($product -> get_name()));
            $this -> unit_of_work -> get_product() -> update($product);

            $product_inventory_in_db = $this -> unit_of_work -> get_product_inventory() -> get_by_key("product_id", $product -> get_id(), 1);
            $product_inventory -> set_id((int) $product_inventory_in_db -> get_id());
            $product_inventory -> set_updated_at(new DateTime());
            $product_inventory -> set_updated_by(1);
            $product_inventory -> set_product_id((int) $product -> get_id());   
            $this -> unit_of_work -> get_product_inventory() -> update($product_inventory);
            // var_dump($product_inventory);
            $discount_in_db = $this -> unit_of_work -> get_discount() -> get_by_key("product_id", $product -> get_id(), 1);
            $discount -> set_id((int) $discount_in_db -> get_id());
            $discount -> set_updated_at(new DateTime());
            $discount -> set_updated_by(1);
            $discount -> set_product_id((int) $product -> get_id());
            $this -> unit_of_work -> get_discount() -> update($discount);
        }
        $this -> redirect_to_action("Index");

    }
  
    public function Delete(?int $id){
        if($id == null || $id == 0){
            echo "page not found";
            return;
        }
        header('Content-Type: application/json');
        $product = $this -> unit_of_work -> get_product() -> get($id);
        // if ($product == null) {
        //     // Product not found, return error response
        //     $this -> json(['success' => false, 'message' => 'Error while deleting']);
        //     exit;
        // }
        $product -> set_deleted_at(new DateTime());
        $product -> set_deleted_by(1);
        $this-> unit_of_work -> get_product() -> update($product);
       
        $product_inventory = $this -> unit_of_work -> get_product_inventory() -> get_by_key("product_id", $product -> get_id(), 1);
        $product_inventory -> set_deleted_at(new DateTime());
        $product_inventory -> set_deleted_by(1);
        $this -> unit_of_work -> get_product_inventory() -> update($product_inventory);

        $discount = $this -> unit_of_work -> get_discount() -> get_by_key("product_id", $product -> get_id(), 1);
        $discount -> set_deleted_at(new DateTime());
        $discount -> set_deleted_by(1);
        $this -> unit_of_work -> get_discount() -> update($discount);

        $this -> json(['success' => true, 'message' => 'Product deleted successfully']);

    }

}