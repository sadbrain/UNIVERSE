<?php
require_once APP_ROOT ."/app/BaseModel.php";

class ProductInventory extends BaseModel
{
    private ?int $id;
    private ?int $quantity;
    private ?int $quantity_buyed;
    private ?string $size;
    private ?string $color;
    private ?string $created_by;
    private ?string $updated_by;
    private ?string $deleted_by;
    private ?DateTime $created_at;
    private ?DateTime $updated_at;
    private ?DateTime $deleted_at;
    private ?int $product_id;
    private ?Product $product;
    public function __construct(){
         $this ->  id = 0;
         $this ->  quantity = null;
         $this ->  quantity_buyed = null;
         $this ->  size = null;
         $this ->  color = null;
         $this ->  created_by = null;
         $this ->  updated_by = null;
         $this ->  deleted_by = null;
         $this ->  created_at = null;
         $this ->  updated_at = null;
         $this ->  deleted_at = null;
         $this ->  product_id = null;
         $this ->  product = null;
    }
    // Getter methods
    public function get_id() : ?int
    {
        return $this -> id;
    }
    public function get_quantity() : ?int
    {
        return $this -> quantity;
    }
    public function get_quantity_buyed() : ?int
    {
        return $this -> quantity_buyed;
    }
    public function get_size() : ?string
    {
        return $this -> size;
    }
    public function get_color() : ?string
    {
        return $this -> color;
    }

    public function get_created_by() : ?string
    {
        return $this -> created_by;
    }
    public function get_updated_by() : ?string
    {
        return $this -> updated_by;
    }
    public function get_deleted_by() : ?string
    {
        return $this -> deleted_by;
    }
    public function get_created_at() : ?DateTime
    {
        return $this -> created_at;
    }
    public function get_updated_at() : ?DateTime
    {
        return $this -> updated_at;
    }
    public function get_deleted_at() : ?DateTime
    {
        return $this -> deleted_at;
    }
    public function get_product_id() : ?int
    {
        return $this -> product_id;
    }
    public function get_product() : ?Product
    {
        return $this -> product;
    }
    // Setter methods
    public function set_id(int $id)
    {
        $this -> id = $id;
    }
    public function set_quantity(int $quantity)
    {
        $this -> quantity = $quantity;
    }
    public function set_quantity_buyed(int $quantity_buyed)
    {
        $this -> quantity_buyed = $quantity_buyed;
    }
    public function set_size(string $size) 
    {
         $this -> size = $size;
    }
    public function set_color(string $color) 
    {
         $this -> color = $color;
    }

    public function set_created_by(string $created_by) 
    {
         $this -> created_by = $created_by;
    }
    public function set_updated_by(string $updated_by) 
    {
         $this -> updated_by = $updated_by;
    }
    public function set_deleted_by(string $deleted_by)
    {
         $this -> deleted_by = $deleted_by;
    }
    public function set_created_at(DateTime $created_at)
    {
         $this -> created_at = $created_at;
    }
    public function set_updated_at(DateTime $updated_at)
    {
         $this -> updated_at = $updated_at;
    }
    public function set_deleted_at(DateTime $deleted_at)
    {
         $this -> deleted_at = $deleted_at;
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
