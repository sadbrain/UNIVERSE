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

        if($id == null || $id == 0){
            $category = new Category();
        }else{
            $category = $this -> unit_of_work -> get_category() -> get($id);
        }
        $view_body = $this -> view();
        require_once $this -> use_layout($view_body, "admin");

    }
    public function UpsertPost(?int $id = null) {
        $category = new Category();
        $this -> unit_of_work -> get_category() -> to_category($category, $_POST);
        if($id == null || $id == 0){
            $category -> set_created_at(new DateTime());
            $category -> set_created_by(1);
            $category -> set_slug($category -> create_slug($category -> get_name()));
            $this -> unit_of_work -> get_category() -> add($category);
        }
        else{
            $category -> set_id($id);
            $category -> set_updated_at(new DateTime());
            $category -> set_updated_by(1);
            $category -> set_slug($category -> create_slug($category -> get_name()));
            $this -> unit_of_work -> get_category() -> update($category);
        }

        $this -> redirect_to_action("Index");
    }
    public function Delete(?int $id){
        if($id == null || $id == 0){
            echo "page not found";
            return;
        }
        header('Content-Type: application/json');
        $category = $this -> unit_of_work -> get_category() -> get($id);
        if ($category === null) {
            // Product not found, return error response
            $this -> json(['success' => false, 'message' => 'Error while deleting']);
            exit;
        }
        $category -> set_deleted_at(new DateTime());
        $category -> set_deleted_by(1);
        $this -> unit_of_work -> get_category() -> update($category);
        $this -> json(['success' => true, 'message' => 'category deleted successfully']);
    }
    
}