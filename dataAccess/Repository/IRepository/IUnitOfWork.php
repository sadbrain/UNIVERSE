<?php
interface IUnitOfWork{
    public function get_product();
    public function get_product_image();
    public function get_order();
    public function get_category();
    public function get_discount();
    public function get_product_inventory();
    public function get_order_detail();
    public function get_payment_detail();
    public function get_user();
    public function get_user_access();
}