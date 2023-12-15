<?php
include_once APP_ROOT."/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT ."/models/ProductCategory.php";
class ProductCategoryRepository implements IRepository{
    private PDO $db;
  

    public function __construct(PDO $db){
        $this->db = $db;
    }
    public function get_db(){
        return $this->db;
    }
    public function get_all(){
        $sql = "SELECT * FROM product_categories";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $product_categories = null;
        if($result){
            $product_categories = [];
            foreach ($result as $product_category){
                $obj = new ProductCategories();
                $this -> to_product_categories($obj, $product_category);
                array_push($product_categories, $obj);
            }
        }

        return $product_categories;
    }
    public function get($id){
        $sql = "SELECT * FROM product_categories where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);     
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $product_category = null;
        if($result){
            $product_category = new ProductCategories();
            $this -> to_product_categories($product_category, $result);
        }
        return $product_category;
    }
    public function add($entity){
        $sql = "INSERT INTO product_categories (product_id, category_id) VALUES (:order_id, :user_id)"; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':product_id' => $entity -> get_product_id(),
            ':category_id' => $entity -> get_category_id(),
        ]);
    }
    public function remove($entity){
        $sql = "DELETE FROM product_categories WHERE id = :id"; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity -> get_id(),
        ]);
    }
    public function update($entity){
        $sql = "UPDATE product_categories SET 
        product_id = :product_id,
        category_id = :category_id
         WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity -> get_id(),
            ':product_id' => $entity -> get_product_id(),
            ':category_id' => $entity -> get_category_id(),
        ]);
    }

    public function to_product_categories($product_categories, $product_categories_in_db){
        $product_categories -> set_id($product_categories_in_db["id"]);
        $product_categories -> set_product_id($product_categories_in_db["product_id"]);
        $product_categories -> set_category_id($product_categories_in_db["category_id"]);
    }
}