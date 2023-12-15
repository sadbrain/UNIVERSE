<?php

class ProductCategories
{
    private $id;
    private $product_id;
    private $product;
    private $category_id;
    private $category;
    // Getter methods
    public function get_id()
    {
        return $this->id;
    }

    public function get_product_id()
    {
        return $this->product_id;
    }

    public function get_category_id()
    {
        return $this->category_id;
    }
    public function get_product()
    {
        return $this->product;
    }

    public function get_category()
    {
        return $this->category;
    }
    // Setter methods
    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_product_id($product_id)
    {
        $this->product_id = $product_id;
    }

    public function set_category_id($category_id)
    {
        $this->category_id = $category_id;
    }
    public function set_product($product)
    {
        $this->product = $product;
    }

    public function set_category($category)
    {
        $this->category = $category;
    }
}
