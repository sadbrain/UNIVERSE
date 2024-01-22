<?php
require_once APP_ROOT ."/app/AdminController.php";
require_once APP_ROOT ."/models/vm/ProductVM.php";
class ProductController extends AdminController
{   
    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
    }

    public function Index(){
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
        return $this->view("Product/index", compact('productvm_list'));
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
        return $this->view("Product/upsert", compact('categories', 'productvm'));
    }

    public function UpsertPost(?int $id = null){
        $product = new Product();
        $discount = new Discount();
        $product_inventory = new ProductInventory();
        $this -> unit_of_work -> get_product() -> to_product($product, $_POST["Product"]);
        $this -> unit_of_work -> get_discount() -> to_discount($discount, $_POST["Discount"]);
        $this -> unit_of_work -> get_product_inventory() -> to_product_inventory($product_inventory, $_POST["ProductInventory"]);
        session_start();
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
            $product_id = $product_in_db -> get_id();

            $_SESSION["success"]="Product created successfully";
            
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
            $product_id = $product -> get_id();
            $_SESSION["success"]="Product updated successfully";


        }
        
        if(isset($_FILES["file"]) && $_FILES["file"] != null){
            $files = $_FILES["file"];
            $file_number = count($files["name"]);
            $product_path = "wwwroot/images/products/product-" . $product_id;
           //neu thu muc chua anh san pham khong ton tai thi tao 
            if(!file_exists($product_path)){
                mkdir($product_path, 0777, true);
            }
            for($i = 0; $i < $file_number; $i++){
                $file = [
                    "name" => $files['name'][$i],
                    "type" => $files['type'][$i],
                    "tmp_name" => $files['tmp_name'][$i],
                    "error" => $files['error'][$i],
                    "size" => $files['size'][$i],
                ];
                $file_path = $product_path ."/". $file['name'];
                $flag = $this ->check_file_valid($file, $file_path);
                if($flag["success"]){
                    move_uploaded_file($file["tmp_name"], $file_path);
                    $_SESSION["success"] = $flag["message"];
                    $product_images = new ProductImage();
                    $product_images -> set_product_id($product_id);
                    $product_images -> set_title($file["name"]);
                    $product_images -> set_url($file_path);
                    $this -> unit_of_work -> get_product_image() -> add($product_images);
                    
                }else{
                    $_SESSION["error"] = $flag["message"];
                }
            }   
        }

        if($id == null || $id == 0){
        $product =  $this -> unit_of_work -> get_product() -> get($product_id);
        $product_images = $this -> unit_of_work -> get_product_image() -> get_by_key("product_id", $product -> get_id());
        $product -> set_thumbnail($product_images[0]->get_url());
        $this -> unit_of_work -> get_product() -> update($product);
        }

        ProductController :: redirect("/Admin/Product");

    }
  
    public function Delete(?int $id){
        if($id == null || $id == 0){
            echo "page not found";
            return;
        }
        header('Content-Type: application/json');
        $product = $this -> unit_of_work -> get_product() -> get($id);
        if ($product == null) {
            $this -> json(['success' => false, 'message' => 'Error while deleting']);
            exit;
        }
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

    private function check_file_valid($file, $file_path){
        $flag = ["success" => true, 
                "message" => "upload file successfully",];

        $ex = array('jpg', 'png', 'jpeg', 'gif', 'jfif');
        $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
        if(!in_array($file_type, $ex)){
            $flag["success"]  = false;
            $flag["message"] =  $file["name"]."file invalid";
        }
        //check dung luong
        if($file["size"]>5000000){
            $flag["success"] = false;
            $flag["message"] = $file["name"] . "size is too big";

        }
        if(file_exists($file_path)){
            $flag["success"]  = false;
            $flag["message"] =  $file["name"]."file is exits";
        }
        return $flag;
    }
    public function GetAll(){
        $product_in_db = $this -> unit_of_work -> get_product() -> get_all();

        $products = [];
        foreach ($product_in_db as $product){
            $product_id = $product->get_id();
            $product_inventory = $this -> unit_of_work -> get_product_inventory() -> get_by_key("product_id", $product_id, 1);
            $discount = $this -> unit_of_work -> get_discount() -> get_by_key("product_id", $product_id, 1);
            $obj = [
                "product" => $product,
                "discount" => $discount,
                "product_inventory" => $product_inventory,
            ];
            array_push($products, $obj);
        }
        $this->json(["data" => $products]);

    }
}
