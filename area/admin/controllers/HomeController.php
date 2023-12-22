<?php
class HomeController {
    private IUnitOfWork $unit_of_work;
    public function __construct(IUnitOfWork $unit_of_work)
    {
        $this -> unit_of_work = $unit_of_work;
    }
    function index(){
        require_once APP_ROOT . "/area/admin/views/Home/index.php";
     
    }
}