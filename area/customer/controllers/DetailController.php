<?php
class DetailController
{
    private IUnitOfWork $unit_of_work;
    public function __construct(IUnitOfWork $unit_of_work)
    {
        $this->unit_of_work = $unit_of_work;
    }
    function index($id, $query = null)
    {
        // print_r($id);
        // print_r($query);

        require_once APP_ROOT . "/area/customer/views/Detail/index.php";
    }
}
