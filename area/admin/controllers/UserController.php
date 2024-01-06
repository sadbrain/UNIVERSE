<?php
require_once APP_ROOT . "/app/AdminController.php";
class UserController extends AdminController
{
    function __construct($unit_of_work)
    {
        parent::__construct($unit_of_work);
    }
    function Index()
    {
        $users = $this->unit_of_work->get_user()->get_all();

        return $this->view("User/index", compact("users"));
    }
    function Create()
    {
        return $this->view("User/create");
    }
    function CreatePost()
    {
        $user = new User();
        $this->unit_of_work->get_user()->to_user($user, $_POST);
        $user->set_role("user");
        $user->set_created_at(new DateTime());
        $user->set_created_by(1);
        $this->unit_of_work->get_user()->add($user);
        $_SESSION["success"] = "User created successfully";
        UserController::redirect("/Admin/User");
    }
    function Delete(?int $id)
    {
        if ($id === null || $id === 0) {
            echo 'page not found';
            return;
        }
        header('Content-Type: application/json');
        $user = $this->unit_of_work->get_user()->get($id);
        if ($user === null) {
            // Product not found, return error response
            $this->json(['success' => false, 'message' => 'Error while deleting']);
            exit;
        }
        $user->set_deleted_at(new DateTime());
        $user->set_deleted_by(1);
        $this->unit_of_work->get_user()->update($user);
        $this->json(['success' => true, 'message' => 'category deleted successfully']);
    }
}
