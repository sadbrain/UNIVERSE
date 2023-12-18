<?php
class CheckoutController
{
    private IUnitOfWork $unit_of_work;
    public function __construct(IUnitOfWork $unit_of_work)
    {
        $this->unit_of_work = $unit_of_work;
    }

    public function index(){
        require_once APP_ROOT . "/area/customer/views/Checkout/index.php";

    }
}
