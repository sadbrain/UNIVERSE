<?php
interface IUnitOfWork{
    public function get_user();
    public function get_product();
    public function get_user_image();
    public function get_product_image();
    public function get_product_category();
    public function get_payment();
    public function get_order();
    public function get_comment();
    public function get_category();
    public function get_cart();
}