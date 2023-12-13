<?php
include_once APP_ROOT."/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT ."/models/ProductImage.php";
class ProductImageRepository implements IRepository{
    private PDO $db;
  

    public function __construct(PDO $db){
        $this->db = $db;
    }
    public function get_db(){
        return $this->db;
    }
    public function get_all(){
        $sql = "SELECT * FROM product_images";
        $stmt = $this->db->prepare($sql);
        if ($stmt->execute()) {
            $product_images = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $product_images;
        } else {
            // Xử lý lỗi thực thi truy vấn
            return false;
        }
    }
    public function get($callback){

    }
    public function add($entity){
        
    }
    public function remove($entity){
        
    }
    
}