<?php
require_once APP_ROOT . "/app/AppController.php";
class CartController extends AppController
{
    function __construct($unit_of_work)
    {
        parent::__construct($unit_of_work);
    }
    function Index(){
        session_start();
        $carts = isset($_SESSION['cart'])? $_SESSION['cart']:[];
        return $this -> view("Cart/index", compact('carts'));
    }
    function Create(){
        session_start();
        var_dump($_POST['orderInfor']);
        $orderInfor = isset($_POST['orderInfor']) ? json_decode($_POST['orderInfor'], true) : null;
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        // Add an item to the carts
        $_SESSION['cart'][] = $orderInfor;
        
        header('Content-Type: application/json');
        $response = array('status' => 'success', 'message' => 'Order added to cart successfully');
        echo json_encode($response);
        exit;
    }
    function Delete(?int $id){
        if($id == 0 || $id == null){
            echo "Page not found";
            return;
        }
        session_start();
        $carts = isset($_SESSION['cart'])? $_SESSION['cart']:[];
        foreach($carts as $key => $cart){
            if($cart['id']== $id){
                unset($carts[$key]);
            }
        }
        $_SESSION["cart"] = $carts;

        CartController::redirect("/Customer/Cart");

    }
    
}


