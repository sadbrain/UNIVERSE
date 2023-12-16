<?php

class ProductCategories
{
    private int $id;
    private int $product_id;
    private Product $product;
    private int $category_id;
    private Category $category;
    // Getter methods
    public function get_id() : int
    {
        return $this->id;
    }

    public function get_product_id() : int
    {
        return $this->product_id;
    }

    public function get_category_id() : int
    {
        return $this->category_id;
    }
    public function get_product() : Product
    {
        return $this->product;
    }

    public function get_category() : Category
    {
        return $this->category;
    }
    // Setter methods
    public function set_id(int $id)
    {
        $this->id = $id;
    }

    public function set_product_id(int $product_id)
    {
        $this->product_id = $product_id;
    }

    public function set_category_id(int $category_id)
    {
        $this->category_id = $category_id;
    }
    public function set_product(Product $product)
    {
        $this->product = $product;
    }

    public function set_category(Category $category)
    {
        $this->category = $category;
    }
}
