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
        $categoryl1 = $this->unit_of_work->get_category()->get(1);
        $categoryl2 = $this->unit_of_work->get_category()->get_all();

        // $category1 = $this -> unit_of_work -> get_category() -> get_by_key("id",3);
        //fn(Category c) => c ->get_id() == 1;
        $product = $this->unit_of_work->get_product()->get_all();
        
        require_once APP_ROOT . "/area/customer/views/Home/index.php";
    }
}
