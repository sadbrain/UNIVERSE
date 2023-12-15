<?php
include_once APP_ROOT."/dataAccess/Repository/IRepository/IRepository.php";
include_once APP_ROOT ."/models/Comment.php";
class CommentRepository implements IRepository{
    private PDO $db;
  

    public function __construct(PDO $db){
        $this->db = $db;
    }
    public function get_db(){
        return $this->db;
    }
    public function get_all(){
        $sql = "SELECT * FROM comments";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $comments = null;
        if($result){
            $comments = [];
            foreach ($result as $comment){
                $obj = new Comment();
                $this -> to_comment($obj, $comment);
                array_push($comments, $obj);
            }
        }

        return $comments;
    }
    public function get($id){
        $sql = "SELECT * FROM comments where id  = :id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $comment = null;
        if($result){
            $comment = new Comment();
            $this -> to_comment($comment, $result);
        }
        return $comment;
    }
    
    public function add($entity){
        $sql = "INSERT INTO comments (content, created_by, product_id, user_id)
         VALUES (:content, :created_by, :product_id, :user_id)"; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':content' => $entity -> get_content(),
            ':created_by' => $entity -> get_created_by(),
            ':product_id' => $entity -> get_product_id(),
            ':user_id' => $entity -> get_user_id(),
        ]);
    }
    public function remove($entity){
        $sql = "DELETE FROM comments WHERE id = :id"; 
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity -> get_id(),
        ]);
    }

    public function update($entity){
        $sql = "UPDATE comments SET 
        content = :content,
        created_by = :created_by,
        product_id = :product_id,
        user_id = :user_id
        WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':id' => $entity -> get_id(),
            ':content' => $entity -> get_content(),
            ':created_by' => $entity -> get_created_by(),
            ':product_id' => $entity -> get_product_id(),
            ':user_id' => $entity -> get_user_id(),
            // Add other columns as needed
        ]);
    }
    public function to_comment($comment, $comment_in_db){
        $comment -> set_id($comment_in_db["id"]);
        $comment -> set_content($comment_in_db["content"]);
        $comment -> set_created_by($comment_in_db["created_by"]);
        $comment -> set_product_id($comment_in_db["product_id"]);
        $comment -> set_user_id($comment_in_db["user_id"]);
    }
    
}