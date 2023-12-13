<?php
class Comment {
    private $id;
    private $content;
    private $created_by;
    private $product_id;
    private $product;
    private $user_id;
    private $user;

    // Getter methods
    public function get_id() {
        return $this->id;
    }

    public function get_content() {
        return $this->content;
    }

    public function get_created_by() {
        return $this->created_by;
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

    public function set_content($content) {
        $this->content = $content;
    }

    public function set_created_by($created_by) {
        $this->created_by = $created_by;
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