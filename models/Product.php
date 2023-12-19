<?php

class Product
{
    private ?int $id;
    private ?string $name;
    private ?string $thumbnail;
    private ?string $brand;
    private ?string $slug;
    private ?string $description;
    private ?float $price;
    private ?float $rating;
    private ?string $created_by;
    private ?string $updated_by;
    private ?string $deleted_by;
    private ?DateTime $created_at;
    private ?DateTime $updated_at;
    private ?DateTime $deleted_at;
    private ?int $category_id;
    private ?Category $category;
    public function __construct(){
         $this -> id = 0;
         $this -> name = null;
         $this -> thumbnail = null;
         $this -> brand = null;
         $this -> slug = null;
         $this -> description = null;
         $this -> price = null;
         $this -> rating = null;
         $this -> created_by = null;
         $this -> updated_by = null;
         $this -> deleted_by = null;
         $this -> created_at = null;
         $this -> updated_at = null;
         $this -> deleted_at = null;
         $this -> category_id = null;
         $this -> category = null;
    }
    // Getter methods
    public function get_id() : ?int
    {
        return $this -> id;
    }

    public function get_name() : ?string
    {
        return $this -> name;
    }
    public function get_thumbnail() : ?string
    {
        return $this -> thumbnail;
    }
    public function get_brand() : ?string
    {
        return $this -> brand;
    }
    public function get_slug() : ?string
    {
        return $this -> slug;
    }
    public function get_description() : ?string
    {
        return $this -> description;
    }

    public function get_price() : ?float
    {
        return $this -> price;
    }

    public function get_rating() : ?float
    {
        return $this -> rating;
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
    public function get_category_id() : ?int
    {
        return $this -> category_id;
    }
    public function get_category() : ?Category
    {
        return $this -> category;
    }
    // Setter methods
    public function set_id(int $id)
    {
        $this -> id = $id;
    }
    public function set_thumbnail(string $thumbnail) 
    {
         $this -> thumbnail = $thumbnail;
    }
    public function set_name(string $name) 
    {
         $this -> name = $name;
    }
    public function set_brand(string $brand) 
    {
         $this -> brand = $brand;
    }
    public function set_slug(string $slug) 
    {
         $this -> slug = $slug;
    }
    public function set_description(string $description) 
    {
         $this -> description = $description;
    }
    public function set_price(float $price) 
    {
         $this -> price = $price;
    }
    public function set_rating(float $rating) 
    {
         $this -> rating = $rating;
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
    public function set_category_id(int $category_id){
        $this -> category_id = $category_id;
    }
    public function set_category(Category $category){
        $this -> category = $category;
    }
}
