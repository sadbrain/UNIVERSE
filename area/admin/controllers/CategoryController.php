<?php
class CategoryController {
    private IUnitOfWork $unit_of_work;
    public function __construct(IUnitOfWork $unit_of_work)
    {
        $this -> unit_of_work = $unit_of_work;
    }
    public function index(){
        // $categories = $this -> unit_of_work -> get_category() -> get_all();
        $categories = $this -> unit_of_work -> get_category() -> get_all();
        require_once APP_ROOT . "/area/admin/views/Category/index.php";
    }
    public function create(){
        require_once APP_ROOT . "/area/admin/views/Category/create.php";

    }
    public function getall(){
        $categories = $this -> unit_of_work -> get_category() -> get_all();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($categories);
        return json_encode($categories);
    }
    
}