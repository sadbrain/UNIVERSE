<?php
class ProductController
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

        require_once APP_ROOT . "/area/customer/views/Product/index.php";
    }
    public function detail(?int $id){
        echo "id la $id";
        require_once APP_ROOT . "/area/customer/views/Product/detail.php";

    }
}
