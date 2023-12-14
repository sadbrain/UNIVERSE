<?php
class HomeController {
    private IUnitOfWork $unit_of_work;
    public function __construct(IUnitOfWork $unit_of_work)
    {
        $this -> unit_of_work = $unit_of_work;
    }
    function index(){
        $category = $this -> unit_of_work -> get_category() -> get_all();
        $product = $this -> unit_of_work -> get_product() -> get_all();
        require_once APP_ROOT . "/area/customer/views/Home/index.php";
        
    }
}