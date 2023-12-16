<?php

class Payment
{
    private int $id;
    private string $type;
    private DateTime $date_time;
    private string $status;
    private int $order_id;
    private Order $order;


    // Getter methods
    public function get_id() : int
    {
        return $this->id;
    }

    public function get_order_id() : int
    {
        return $this->order_id;
    }
    public function get_order() : Order
    {
        return $this->order;
    }
    public function get_type() : string
    {
        return $this->type;
    }

    public function get_date_time() : DateTime
    {
        return $this->date_time;
    }

    public function get_status() : string
    {
        return $this->status;
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

    public function set_type(string $type)
    {
        $this->type = $type;
    }

    public function set_date_time(DateTime $date_time)
    {
        $this->date_time = $date_time;
    }

    public function set_status(string $status)
    {
        $this->status = $status;
    }
    public function set_order(Order $order)
    {
        $this->order = $order;
    }
}
