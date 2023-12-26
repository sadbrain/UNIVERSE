<?php
require_once APP_ROOT ."/app/BaseController.php";
class CategoryController extends BaseController
{

    public function Index(){
        // $categories = $this -> unit_of_work -> get_category() -> get_all();
        $categories = $this -> unit_of_work -> get_category() -> get_all();
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body,"admin");

    }
    public function create(){
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body, "admin");

    }

    
}