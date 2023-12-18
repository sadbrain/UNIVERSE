<?php
class CartController
{
    private IUnitOfWork $unit_of_work;
    public function __construct(IUnitOfWork $unit_of_work)
    {
        $this->unit_of_work = $unit_of_work;
    }
    function index()
    {
        // print_r($id);
        // print_r($query);

        require_once APP_ROOT . "/area/customer/views/Cart/index.php";
    }

}
