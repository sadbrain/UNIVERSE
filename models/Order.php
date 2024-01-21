<?php
require_once APP_ROOT ."/app/BaseModel.php";
class Order extends BaseModel implements JsonSerializable
{
    private ?int $id;
    private ?string $buyer_name;
    private ?string $buyer_email;
    private ?string $buyer_phone;
    private ?string $buyer_address;
    private ?float $total;
    private ?float $shipping_cost;
    private ?string $status;
    private ?DateTime $created_at;
    private ?int $product_id;
    private ?Product $product;
    public function __construct(){
         $this ->  id = 0;
         $this ->  buyer_name = null;
         $this ->  buyer_email = null;
         $this ->  buyer_phone = null;
         $this ->  buyer_address = null;
         $this ->  total = null;
         $this ->  shipping_cost = null;
         $this ->  status = null;
         $this ->  created_at = null;
         $this ->  product_id = null;
         $this ->  product = null;
    }
    public function jsonSerialize() {
        return get_object_vars($this);
    }
    public function get_id() : ?int
    {
        return $this -> id;
    }
    public function get_buyer_name(): ?string
    {
        return $this -> buyer_name;
    }
    public function get_buyer_email() : ?string
    {
        return $this -> buyer_email;
    }

    public function get_buyer_phone() : ?string
    {
        return $this -> buyer_phone;
    }
    public function get_buyer_address() : ?string
    {
        return $this -> buyer_address;
    }
    public function get_total() : ?float
    {
        return $this -> total;
    }
    public function get_shipping_cost() : ?float
    {
        return $this -> shipping_cost;
    }
    public function get_created_at() : ?DateTime
    {
        return $this -> created_at;
    }
    public function get_status() : ?string
    {
        return $this -> status;
    }
    public function get_product_id() : ?int
    {
        return $this -> product_id;
    }
    public function get_product() : ?Product
    {
        return $this -> product;
    }
    public function set_id(int $id)
    {
        $this -> id = $id;
    }
    public function set_buyer_name(string $buyer_name)
    {
        $this -> buyer_name = $buyer_name;
    }
    public function set_buyer_email(string $buyer_email)
    {
        $this -> buyer_email = $buyer_email;
    }
    public function set_buyer_phone(string $buyer_phone)
    {
        $this -> buyer_phone = $buyer_phone;
    }
    public function set_buyer_address(string $buyer_address)
    {
        $this -> buyer_address = $buyer_address;
    }
    public function set_total(float $total)
    {
        $this -> total = $total;
    }
    public function set_shipping_cost(float $shipping_cost)
    {
        $this -> shipping_cost = $shipping_cost;
    }
    public function set_created_at(DateTime $created_at)
    {
        $this -> created_at = $created_at;
    }
    public function set_status(string $status)
    {
        $this -> status = $status;
    }
    public function set_product_id(int $product_id)
    {
        $this -> product_id = $product_id;
    }
    public function set_product(Product $product)
    {
        $this -> product = $product;
    }
}