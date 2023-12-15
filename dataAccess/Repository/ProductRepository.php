<?php
include_once APP_ROOT."/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT ."/models/Product.php";
class ProductRepository implements IRepository{
    private PDO $db;

    public function __construct(PDO $db){
        $this->db = $db;
    }
    public function get_db(){
        return $this->db;
    }

    public function get_all(){
        $sql = "SELECT * FROM products";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $products = null;
        if($result){
            $products = [];
            foreach ($result as $product){
                $obj = new Product();
                $this -> to_product($obj, $product);
                array_push($products, $obj);
            }
        }

        return $products;
    }
    public function get($id){
        $sql = "SELECT * FROM products where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $product = null;
        if($result){
            $product = new Product();
            $this -> to_product($product, $result);
        }
        return $product;
    }
    public function add($entity){
        $sql = "INSERT INTO products (title, short_description, long_description, price, rating, quantity, quantity_buyed, size, color)
        VALUES (:title, :short_description, :long_description, :price, :rating, :quantity, :quantity_buyed, :size, :color)"; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':title' => $entity -> get_title(),
            ':short_description' => $entity -> get_short_description(),
            ':long_description' => $entity -> get_long_description(),
            ':price' => $entity -> get_price(),
            ':rating' => $entity -> get_rating(),
            ':quantity' => $entity -> get_quantity(),
            ':quantity_buyed' => $entity -> get_quantity_bought(),
            ':size' => $entity -> get_size(),
            ':color' => $entity -> get_color(),
        ]); 
    }
    public function remove($entity){
        $sql = "DELETE FROM products WHERE id = :id"; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity -> get_id(),
        ]); 
    }
    public function update($entity){
        $sql = "UPDATE products SET 
        title = :title,
        short_description = :short_description,
        long_description = :long_description,
        price = :price,
        rating, = :rating,
        quantity, = :quantity,
        quantity_buyed, = :quantity_buyed,
        size, = :size,
        color, = :color
        WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':title' => $entity -> get_title(),
            ':short_description' => $entity -> get_short_description(),
            ':long_description' => $entity -> get_long_description(),
            ':price' => $entity -> get_price(),
            ':rating' => $entity -> get_rating(),
            ':quantity' => $entity -> get_quantity(),
            ':quantity_buyed' => $entity -> get_quantity_bought(),
            ':size' => $entity -> get_size(),
            ':color' => $entity -> get_color(),
            // Add other columns as needed
        ]);
    }
    

    public function to_product($product, $product_in_db){
        $product -> set_id($product_in_db["id"]);
        $product -> set_title($product_in_db["title"]);
        $product -> set_short_description($product_in_db["short_description"]);
        $product -> set_long_description($product_in_db["long_description"]);
        $product -> set_price($product_in_db["price"]);
        $product -> set_rating($product_in_db["rating"]);
        $product -> set_quantity($product_in_db["quantity"]);
        $product -> set_quantity_bought($product_in_db["quantity_buyed"]);
        $product -> set_size($product_in_db["size"]);
        $product -> set_color($product_in_db["color"]);
        
    }
}