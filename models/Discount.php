<?php

class Discount
{
    private ?int $id;
    private ?float $discount_price;
    private ?DateTime $discount_from;
    private ?DateTime $discount_to;
    private ?string $created_by;
    private ?string $updated_by;
    private ?string $deleted_by;
    private ?DateTime $created_at;
    private ?DateTime $updated_at;
    private ?DateTime $deleted_at;
    private ?int $product_id;
    private ?Product $product;
    public function __construct(){
         $this -> id = 0;
         $this -> discount_price = null;
         $this -> discount_from = null;
         $this -> discount_to = null;
         $this -> created_by = null;
         $this -> updated_by = null;
         $this -> deleted_by = null;
         $this -> created_at = null;
         $this -> updated_at = null;
         $this -> deleted_at = null;
         $this -> product_id = null;
         $this -> product = null;
    }
    // Getter methods
    public function get_id() : ?int
    {
        return $this -> id;
    }
    public function get_discount_price() : ?float
    {
        return $this -> discount_price;
    }
    public function get_discount_from() : ?DateTime
    {
        return $this -> discount_from;
    }
    public function get_discount_to() : ?DateTime
    {
        return $this -> discount_to;
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
    public function set_discount_price(float $discount_price)
    {
        $this -> discount_price = $discount_price;
    }
    public function set_discount_from(DateTime $discount_from) 
    {
         $this -> discount_from = $discount_from;
    }
    public function set_discount_to(DateTime $discount_to) 
    {
         $this -> discount_to = $discount_to;
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
