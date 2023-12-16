<?php
class Comment
{
    private int $id;
    private string $content;
    private DateTime $created_by;
    private int $product_id;
    private Product $product;
    private int $user_id;
    private User $user;

    // Getter methods
    public function get_id() : int
    {
        return $this->id;
    }

    public function get_content() : string
    {
        return $this->content;
    }

    public function get_created_by() : DateTime
    {
        return $this->created_by;
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

    public function set_content(string $content)
    {
        $this->content = $content;
    }

    public function set_created_by(DateTime $created_by)
    {
        $this->created_by = $created_by;
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
