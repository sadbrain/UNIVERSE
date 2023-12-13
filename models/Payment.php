<?php

class Payment {
    private $id;
    private $type;
    private $date_time;
    private $status;
    private $order_id;
    private $order;


    // Getter methods
    public function get_id() {
        return $this->id;
    }

    public function get_order_id() {
        return $this->order_id;
    }
    public function get_order() {
        return $this->order;
    }
    public function get_type() {
        return $this->type;
    }

    public function get_date_time() {
        return $this->date_time;
    }

    public function get_status() {
        return $this->status;
    }

    // Setter methods
    public function set_id($id) {
        $this->id = $id;
    }

    public function set_order_id($order_id) {
        $this->order_id = $order_id;
    }

    public function set_type($type) {
        $this->type = $type;
    }

    public function set_date_time($date_time) {
        $this->date_time = $date_time;
    }

    public function set_status($status) {
        $this->status = $status;
    }
    public function set_order_($order) {
        $this->order = $order;
    }
    
}

?>