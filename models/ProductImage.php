<?php
require_once APP_ROOT ."/app/BaseModel.php";
class ProductImage extends BaseModel
{
    private ?int $id;
    private ?string $title;
    private ?string $url;
    private ?int $product_id;
    private ?Product $product;
    public function __construct(){
        $this -> id = 0;
        $this -> title = null;
        $this -> url = null;
        $this -> product_id = null;
        $this -> product = null;
    }

    // Getter methods
    public function get_id() : ?int
    {
        return $this -> id;
    }

    public function get_title() : ?string
    {
        return $this -> title;
    }

    public function get_url() : ?string
    {
        return $this -> url;
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

    public function set_url(string $url)
    {
        $this -> url = $url;
    }

    public function set_title(string $title)
    {
        $this -> title = $title;
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
