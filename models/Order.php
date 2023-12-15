<?php

class Order
{
    private int $id;
    private int $quantity;
    private string $status;
    private float $total;
    private string $size;
    private string $color;
    private DateTime $date_time;
    private int $product_id;
    private Product $product;
    private int $user_id;
    private User $user;

    // Getter methods
    public function get_id() : int
    {
        return $this->id;
    }

    public function get_quantity(): int
    {
        return $this->quantity;
    }

    public function get_status() : string
    {
        return $this->status;
    }

    public function get_total() : float
    {
        return $this->total;
    }

    public function get_size() : string
    {
        return $this->size;
    }

    public function get_color() : string
    {
        return $this->color;
    }

    public function get_date_time() : DateTime
    {
        return $this->date_time;
    }

    public function get_product_id() : int
    {
        return $this->product_id;
    }

    public function get_user_id() : int
    {
        return $this->user_id;
    }
    public function get_product() : Product
    {
        return $this->product;
    }

    public function get_user() : User
    {
        return $this->user;
    }
    // Setter methods
    public function set_id(int $id)
    {
        $this->id = $id;
    }

    public function set_quantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function set_status(string $status)
    {
        $this->status = $status;
    }

    public function set_total(float $total)
    {
        $this->total = $total;
    }

    public function set_size(string $size)
    {
        $this->size = $size;
    }

    public function set_color(string $color)
    {
        $this->color = $color;
    }

    public function set_date_time(DateTime $date_time)
    {
        $this->date_time = $date_time;
    }

    public function set_product_id(int $product_id)
    {
        $this->product_id = $product_id;
    }

    public function set_user_id(int $user_id)
    {
        $this->user_id = $user_id;
    }
    public function set_product(Product $product)
    {
        $this->product = $product;
    }

    public function set_user(User $user)
    {
        $this->user = $user;
    }
}
