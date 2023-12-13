<?php

class Order {
    private $id;
    private $quantity;
    private $status;
    private $total;
    private $size;
    private $color;
    private $date_time;
    private $product_id;
    private $product;
    private $user_id;
    private $user;

    // Getter methods
    public function get_id() {
        return $this->id;
    }

    public function get_quantity() {
        return $this->quantity;
    }

    public function get_status() {
        return $this->status;
    }

    public function get_total() {
        return $this->total;
    }

    public function get_size() {
        return $this->size;
    }

    public function get_color() {
        return $this->color;
    }

    public function get_date_time() {
        return $this->date_time;
    }

    public function get_product_id() {
        return $this->product_id;
    }

    public function get_user_id() {
        return $this->user_id;
    }
    public function get_product() {
        return $this->product;
    }

    public function get_user() {
        return $this->user;
    }
    // Setter methods
    public function set_id($id) {
        $this->id = $id;
    }

    public function set_quantity($quantity) {
        $this->quantity = $quantity;
    }

    public function set_status($status) {
        $this->status = $status;
    }

    public function set_total($total) {
        $this->total = $total;
    }

    public function set_size($size) {
        $this->size = $size;
    }

    public function set_color($color) {
        $this->color = $color;
    }

    public function set_date_time($date_time) {
        $this->date_time = $date_time;
    }

    public function set_product_id($product_id) {
        $this->product_id = $product_id;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }
    public function set_product($product) {
        $this->product = $product;
    }

    public function set_user($user) {
        $this->user = $user;
    }

}

?>