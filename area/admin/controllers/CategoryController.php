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
    public function Upsert(?int $id = null){
        if($id == null){
            $category = new Category();
            $view_body = $this -> view();
            require_once $this -> use_layout($view_body, "admin");
        }


    }
    public function UpsertPost(?int $id = null){
        $category = new Category();
        $this -> unit_of_work -> get_category() -> to_category($category, $_POST);

        if($id == null || $id == 0){
            $category -> set_created_at(new DateTime());
            $category -> set_created_by(1);
            $category -> set_slug($category -> create_slug($category -> get_name()));
            $this -> unit_of_work -> get_category() -> add($category);
        }

        $this -> redirct_to_action("Index");
    }

    
}