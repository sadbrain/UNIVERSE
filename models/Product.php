<?php 
namespace App\Models;

class Product {
    private $id;
    private $title;
    private $short_description;
    private $long_description;
    private $price;
    private $rating;
    private $quantity;
    private $quantity_bought;
    private $size;
    private $color;
    private $product_images;
    private $product_categories;
    // Getter methods
    public function get_id() {
        return $this->id;
    }

    public function get_title() {
        return $this->title;
    }

    public function get_short_description() {
        return $this->short_description;
    }

    public function get_long_description() {
        return $this->long_description;
    }

    public function get_price() {
        return $this->price;
    }

    public function get_rating() {
        return $this->rating;
    }

    public function get_quantity() {
        return $this->quantity;
    }

    public function get_quantity_bought() {
        return $this->quantity_bought;
    }

    public function get_size() {
        return $this->size;
    }

    public function get_color() {
        return $this->color;
    }
    public function get_product_images() {
        return $this->product_images;
    }
    public function get_product_categories() {
        return $this->product_categories;
    }

    // Setter methods
    public function set_id($id) {
        $this->id = $id;
    }

    public function set_title($title) {
        $this->title = $title;
    }

    public function set_short_description($short_description) {
        $this->short_description = $short_description;
    }

    public function set_long_description($long_description) {
        $this->long_description = $long_description;
    }

    public function set_price($price) {
        $this->price = $price;
    }

    public function set_rating($rating) {
        $this->rating = $rating;
    }

    public function set_quantity($quantity) {
        $this->quantity = $quantity;
    }

    public function set_quantity_bought($quantityBought) {
        $this->quantity_bought = $quantityBought;
    }

    public function set_size($size) {
        $this->size = $size;
    }

    public function set_color($color) {
        $this->color = $color;
    }
    public function set_product_images($product_images) {
        $this->product_images = $product_images;
    }
    public function set_product_categories($product_categories) {
        $this->product_categories = $product_categories;
    }
    
}


