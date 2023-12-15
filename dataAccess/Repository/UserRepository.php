<?php
include_once APP_ROOT."/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT ."/models/User.php";
class UserRepository implements IRepository{
    private PDO $db;
  

    public function __construct(PDO $db){
        $this->db = $db;
    }
    public function get_db(){
        return $this->db;
    }
    public function get_all(){
        $sql = "SELECT * FROM users";
        $stmt = $this->db->prepare($sql);
        if ($stmt->execute()) {
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } else {
            // Xử lý lỗi thực thi truy vấn
            return false;
        }
    }
    public function add($entity){
        
    }
    public function remove($entity){
        
    }
    public function get($id){

    }
    public function update($entity){
        
    }
    
}