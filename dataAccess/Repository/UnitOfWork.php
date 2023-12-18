<?php
include_once "IRepository/IUnitOfWork.php";
include_once "ProductRepository.php";
include_once "ProductImageRepository.php";
include_once "OrderRepository.php";
include_once "CategoryRepository.php";
include_once "DiscountRepository.php";
include_once "ProductInventoryRepository.php";
include_once "OrderDetailRepository.php";
include_once "PaymentDetailRepository.php";
class UnitOfWork implements IUnitOfWork
{
    private PDO $db;
    private $product;
    private $product_image;
    private $order;
    private $category;
    private $discount;
    private $product_inventory;
    private $order_detail;
    private $payment_detail;

    public function __construct(PDO $db)
    {
        $this -> db = $db;
        $this -> product = new ProductRepository($this -> db);
        $this -> product_image = new ProductImageRepository($this -> db);
        $this -> order = new OrderRepository($this -> db);
        $this -> category = new CategoryRepository($this -> db);
        $this -> discount = new DiscountRepository($this -> db);
        $this -> product_inventory = new ProductInventoryRepository($this -> db);
        $this -> order_detail = new OrderDetailRepository($this -> db);
        $this -> payment_detail = new PaymentDetailRepository($this -> db);
    }
    public function get_db()
    {
        return $this -> db;
    }

    public function get_product()
    {
        return $this -> product;
    }
    public function get_product_image()
    {
        return $this -> product_image;
    }

    public function get_order()
    {
        return $this -> order;
    }

    public function get_category()
    {
        return $this -> category;
    }
    public function get_discount()
    {
        return $this -> discount;

    }
    public function get_product_inventory(){
        return $this -> product_inventory;
    }
    public function get_order_detail(){
        return $this -> order_detail;
    }
    public function get_payment_detail(){
        return $this -> payment_detail;
    }
}
