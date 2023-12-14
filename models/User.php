<?php

class User {
    private $id;
    private $name;
    private $address;
    private $phone;
    private $email;
    private $password;
    private $role;
    private $user_images;

    // Getter methods
    public function get_id() {
        return $this->id;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_address() {
        return $this->address;
    }

    public function get_phone() {
        return $this->phone;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_password() {
        return $this->password;
    }

    public function get_role() {
        return $this->role;
    }


    public function get_user_images() {
        return $this->user_images;
    }

    // Setter methods
    public function set_id($id) {
        $this->id = $id;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function set_address($address) {
        $this->address = $address;
    }

    public function set_phone($phone) {
        $this->phone = $phone;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function set_password($password) {
        $this->password = $password;
    }

    public function set_role($role) {
        $this->role = $role;
    }

    public function set_user_images($user_images) {
        $this->user_images = $user_images;
    }
}

?>