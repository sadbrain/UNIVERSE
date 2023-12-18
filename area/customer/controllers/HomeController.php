<?php
class HomeController
{
    private IUnitOfWork $unit_of_work;
    public function __construct(IUnitOfWork $unit_of_work)
    {
        $this->unit_of_work = $unit_of_work;
    }
    function index()
    {
        $category = new Category();
        $category -> set_name("nhi");
        $category -> set_slug("ssss");
        $category -> set_id(7);
        // $this -> unit_of_work -> get_category() -> remove($category);
        // $this -> unit_of_work ->get_category() -> remove($category);
        // $categoryl1 = $this->unit_of_work->get_category()->get(1);

        // $categoryl2 = $this->unit_of_work->get_category()->get_all();
        // $category = $this -> unit_of_work -> get_product_image() -> remove(1);
        // $category1 = $this -> unit_of_work -> get_category() -> get_by_key("id",3);
        //fn(Category c) => c ->get_id() == 1;
        $product = $this->unit_of_work->get_product()->get_all();
        $product_image = $this->unit_of_work->get_product_image()->get_all();
        $product_inventory = $this->unit_of_work->get_product_inventory()->get_all();
        $discount = $this->unit_of_work->get_discount()->get_all();
        $order = $this->unit_of_work->get_order()->get_all();
        $order_detail = $this->unit_of_work->get_order_detail()->get_all();
        $payment_detail = $this->unit_of_work->get_payment_detail()->get_all();
        
        require_once APP_ROOT . "/area/customer/views/Home/index.php";
    }
}
