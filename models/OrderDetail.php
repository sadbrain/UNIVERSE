<?php
require_once APP_ROOT ."/app/BaseModel.php";
class OrderDetail extends BaseModel implements JsonSerializable
{
    private ?int $id;
    private ?string $product_name;
    private ?int $product_quantity;
    private ?float $product_price;
    private ?float $product_discount_price;
    private ?string $product_color;
    private ?string $product_size;
    private ?int $product_id;
    private ?Product $product;
    private ?int $order_id;
    private ?Order $order;
    public function __construct(){
        $this ->  id = 0;
        $this ->  product_name = null;
        $this ->  product_quantity = null;
        $this ->  product_price = null;
        $this ->  product_discount_price = null;
        $this ->  product_color = null;
        $this ->  product_size = null;
        $this ->  product_id = null;
        $this ->  product = null;
        $this ->  order_id = null;
        $this ->  order = null;
    }
    // Getter methods
    public function jsonSerialize() {
        return get_object_vars($this);
    }
    public function get_id() : ?int
    {
        return $this -> id;
    }

    public function get_product_name(): ?string
    {
        return $this -> product_name;
    }

    public function get_product_color() : ?string
    {
        return $this -> product_color;
    }

    public function get_product_size() : ?string
    {
        return $this -> product_size;
    }

    public function get_product_quantity() : ?int
    {
        return $this -> product_quantity;
    }

    public function get_product_price() : ?float
    {
        return $this -> product_price;
    }
    public function get_product_discount_price() : ?float
    {
        return $this -> product_discount_price;
    }


    public function get_product_id() : ?int
    {
        return $this -> product_id;
    }

  
    public function get_product() : ?Product
    {
        return $this -> product;
    }
    public function get_order_id() : ?int
    {
        return $this -> order_id;
    }

  
    public function get_order() : ?Order
    {
        return $this -> order;
    }

    // Setter methods
    public function set_id(int $id)
    {
        $this -> id = $id;
    }

    public function set_product_name(string $product_name)
    {
        $this -> product_name = $product_name;
    }

    public function set_product_color(string $product_color)
    {
        $this -> product_color = $product_color;
    }

    public function set_product_size(string $product_size)
    {
        $this -> product_size = $product_size;
    }

    public function set_product_quantity(int $product_quantity)
    {
        $this -> product_quantity = $product_quantity;
    }

    public function set_product_price(float $product_price)
    {
        $this -> product_price = $product_price;
    }
    public function set_product_discount_price(float $product_discount_price)
    {
        $this -> product_discount_price = $product_discount_price;
    }


    public function set_product_id(int $product_id)
    {
        $this -> product_id = $product_id;
    }

    public function set_product(Product $product)
    {
        $this -> product = $product;
    }
    public function set_order_id(int $order_id)
    {
        $this -> order_id = $order_id;
    }

    public function set_order(Order $order)
    {
        $this -> order = $order;
    }

}
