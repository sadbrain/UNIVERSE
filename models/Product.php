<?php

class Product
{
    private int $id;
    private string $title;
    private string $short_description;
    private string $long_description;
    private float $price;
    private float $rating;
    private int $quantity;
    private int $quantity_bought;
    private array $size;
    private array $color;
    private array $product_images;
    private array $product_categories;
    // Getter methods
    public function get_id() : int
    {
        return $this->id;
    }

    public function get_title() : string
    {
        return $this->title;
    }

    public function get_short_description() : string
    {
        return $this->short_description;
    }

    public function get_long_description() : string
    {
        return $this->long_description;
    }

    public function get_price() : float
    {
        return $this->price;
    }

    public function get_rating() : float
    {
        return $this->rating;
    }

    public function get_quantity() : int
    {
        return $this->quantity;
    }

    public function get_quantity_bought() : int
    {
        return $this->quantity_bought;
    }

    public function get_size() : array
    {
        return $this->size;
    }

    public function get_color() : array
    {
        return $this->color;
    }
    public function get_product_images() : array
    {
        return $this->product_images;
    }
    public function get_product_categories() : array
    {
        return $this->product_categories;
    }

    // Setter methods
    public function set_id(int $id)
    {
        $this->id = $id;
    }

    public function set_title(string $title)
    {
        $this->title = $title;
    }

    public function set_short_description(string $short_description)
    {
        $this->short_description = $short_description;
    }

    public function set_long_description(string $long_description)
    {
        $this->long_description = $long_description;
    }

    public function set_price(float $price)
    {
        $this->price = $price;
    }

    public function set_rating(float $rating)
    {
        $this->rating = $rating;
    }

    public function set_quantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function set_quantity_bought(int $quantity_bought)
    {
        $this->quantity_bought = $quantity_bought;
    }

    public function set_size(array $size)
    {
        $this->size = $size;
    }

    public function set_color(array $color)
    {
        $this->color = $color;
    }
    public function set_product_images(array $product_images)
    {
        $this->product_images = $product_images;
    }
    public function set_product_categories(array $product_categories)
    {
        $this->product_categories = $product_categories;
    }
}
