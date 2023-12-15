<?php

class User
{
    private int $id;
    private string $name;
    private string $address;
    private string $phone;
    private string $email;
    private string $password;
    private string $role;
    private array $user_images;

    // Getter methods
    public function get_id() : int
    {
        return $this->id;
    }

    public function get_name() : string
    {
        return $this->name;
    }

    public function get_address() : string
    {
        return $this->address;
    }

    public function get_phone() : string
    {
        return $this->phone;
    }

    public function get_email() : string
    {
        return $this->email;
    }

    public function get_password() : string
    {
        return $this->password;
    }

    public function get_role() : string
    {
        return $this->role;
    }


    public function get_user_images() : array
    {
        return $this->user_images;
    }

    // Setter methods
    public function set_id(int $id)
    {
        $this->id = $id;
    }

    public function set_name(string $name)
    {
        $this->name = $name;
    }

    public function set_address(string  $address)
    {
        $this->address = $address;
    }

    public function set_phone(string $phone)
    {
        $this->phone = $phone;
    }

    public function set_email(string $email)
    {
        $this->email = $email;
    }

    public function set_password(string $password)
    {
        $this->password = $password;
    }

    public function set_role(string $role)
    {
        $this->role = $role;
    }

    public function set_user_images(array $user_images)
    {
        $this->user_images = $user_images;
    }
}
