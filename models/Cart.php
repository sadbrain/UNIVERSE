<?php
class Cart
{
    private int $id;
    private int $order_id;
    private Order $order;
    private int $user_id;
    private User $user;
    // Getter methods
    public function get_id() : int
    {
        return $this->id;
    }

    public function get_order_id() : int
    {
        return $this->order_id;
    }

    public function get_user_id() : int
    {
        return $this->user_id;
    }
    public function get_order() : Order
    {
        return $this->order;
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

    public function set_order_id(int $order_id)
    {
        $this->order_id = $order_id;
    }

    public function set_user_id(int $user_id)
    {
        $this->user_id = $user_id;
    }
    public function set_order(Order $order)
    {
        $this->order = $order;
    }

    public function set_user(User $user)
    {
        $this->user = $user;
    }
}
