<?php
namespace App\Models;

class Cart {
    private $id;
    private $order_id;
    private $order;
    private $user_id;
    private $user;
    // Getter methods
    public function get_id() {
        return $this->id;
    }

    public function get_order_id() {
        return $this->order_id;
    }

    public function get_user_id() {
        return $this->user_id;
    }
    public function get_order() {
        return $this->order;
    }

    public function get_user() {
        return $this->user;
    }
    // Setter methods
    public function set_id($id) {
        $this->id = $id;
    }

    public function set_order_id($order_id) {
        $this->order_id = $order_id;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }
    public function set_order($order) {
        $this->order = $order;
    }

    public function set_user($user) {
        $this->user = $user;
    }

  
}

?>