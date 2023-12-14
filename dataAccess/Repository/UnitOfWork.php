<?php
include_once "IRepository/IUnitOfWork.php";
include_once "UserRepository.php";
include_once "ProductRepository.php";
include_once "UserImageRepository.php";
include_once "ProductImageRepository.php";
include_once "ProductCategoryRepository.php";
include_once "PaymentRepository.php";
include_once "OrderRepository.php";
include_once "CommentRepository.php";
include_once "CategoryRepository.php";
include_once "CartRepository.php";

class UnitOfWork implements IUnitOfWork{
    private PDO $db;
    private $user; 
    private $product; 
    private $user_image;
    private $product_image;
    private $product_category;
    private $payment;
    private $order;
    private $comment;
    private $category;
    private $cart;

    public function __construct(PDO $db){
        $this->db = $db;
        $this->user = new UserRepository($this->db);     
        $this->product = new ProductRepository($this->db);     
        $this->user_image = new UserImageRepository($this->db);     
        $this->product_image = new ProductImageRepository($this->db);     
        $this->product_category = new ProductCategoryRepository($this->db);     
        $this->payment = new PaymentRepository($this->db);     
        $this->order = new OrderRepository($this->db);     
        $this->comment = new CommentRepository($this->db);     
        $this->category = new CategoryRepository($this->db);     
        $this->cart = new CartRepository($this->db);     
    }
    public function get_db(){
        return $this->db;
    }
    public function get_user(){
        return $this->user;
    }
 
    public function get_product(){
        return $this->product;
    }
    public function get_user_image(){
        return $this->user_image;
    }
    public function get_product_image(){
        return $this->product_image;
    }
    public function get_product_category(){
        return $this->product_category;
    }
    public function get_payment(){
        return $this->payment;
    }
    public function get_order(){
        return $this->order;
    }
    public function get_comment(){
        return $this->comment;
    }
    public function get_category(){
        return $this->category;
    }
    public function get_cart(){
        return $this->cart;
    }

}