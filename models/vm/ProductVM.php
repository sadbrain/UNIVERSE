<?php
class ProductVM{
    private ?Product $product;
    private ?ProductInventory $product_inventory;
    private ?array $product_images;
    private ?Discount $discount;
    public function __construct(?Product $product, ?ProductInventory $product_inventory, ?array $product_images, ?Discount $discount){
        $this -> product = $product;
        $this -> product_inventory = $product_inventory;
        $this -> product_images = $product_images;
        $this -> discount = $discount;
    }
    public function get_product() : ?Product
    {
        return $this->product;
    } 

    public function get_product_inventory() : ?ProductInventory
    {
        return $this->product_inventory;
    }
    public function get_product_images() : ?array
    {
        return $this->product_images;
    }
    public function get_discount() : ?Discount
    {
        return $this->discount;
    }
    public function set_product(?Product $product){
        $this -> product = $product;
    }
    public function set_product_inventory(?ProductInventory $product_inventory){
        $this -> product_inventory = $product_inventory;
    }
    public function set_product_images(?array $product_images){
        $this -> product_images = $product_images;
    }
    public function set_discount(?Discount $discount){
        $this -> discount = $discount;
    }

}