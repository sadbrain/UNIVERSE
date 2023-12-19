<?php

class PaymentDetail
{
    private ?int $id;
    private ?string $payment_type;
    private ?string $provider;
    private ?string $account;
    private ?string $expiry;
    private ?int $order_id;
    private ?Order $order;
    public function __construct(){
        $this ->  id = 0;
        $this ->  payment_type = null;
        $this ->  provider = null;
        $this ->  account = null;
        $this ->  expiry = null;
        $this ->  order_id = null;
    }
    // Getter methods
    public function get_id() : ?int
    {
        return $this -> id;
    }

    public function get_payment_type(): ?string
    {
        return $this -> payment_type;
    }

    public function get_expiry() : ?string
    {
        return $this -> expiry;
    }

    
    public function get_provider() : ?string
    {
        return $this -> provider;
    }

    public function get_account() : ?string
    {
        return $this -> account;
    }


    public function get_order_id() : ?int
    {
        return $this -> order_id;
    }

  
    public function get_order() : ?Order
    {
        return $this -> order;
    }

    // Setter methods
    public function set_id(int $id)
    {
        $this -> id = $id;
    }

    public function set_payment_type(string $payment_type)
    {
        $this -> payment_type = $payment_type;
    }

    public function set_expiry(string $expiry)
    {
        $this -> expiry = $expiry;
    }

    public function set_provider(string $provider)
    {
        $this -> provider = $provider;
    }

    public function set_account(string $account)
    {
        $this -> account = $account;
    }

    public function set_order_id(int $order_id)
    {
        $this -> order_id = $order_id;
    }

    public function set_order(Order $order)
    {
        $this -> order = $order;
    }

}
