<?php
require_once APP_ROOT ."/app/BaseController.php";
class AppController extends BaseController
{
    protected $area = 'customer';
    protected $layout = 'Layout/_layout';
    protected $shared_data;

    function __construct($unit_of_work) {
        parent::__construct($unit_of_work);
        $this->shared_data = [
            'items' => ['123'. '555']
        ];
    }
}