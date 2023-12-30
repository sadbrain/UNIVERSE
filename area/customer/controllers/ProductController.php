<?php
require_once APP_ROOT ."/app/BaseController.php";
class ProductController extends BaseController
{
    function Index()
    {
        // print_r($id);
        // print_r($query);
        
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body);
        

    }
    public function Detail(?int $id){
        echo "id la $id";
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body);
    }
}
