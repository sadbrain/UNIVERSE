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
        $orderInfor = isset($_POST['orderInfor']) ? json_decode($_POST['orderInfor'], true) : null;
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        if (!$orderInfor){
            $this -> json(array('status' => 'fail', 'message' => 'Order added to cart successfully'));

        }
        // Add an item to the cart
        $_SESSION['cart'][] = $orderInfor;
        $this -> json(array('status' => 'success', 'message' => 'Order added to cart successfully'));
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
    function Update() {
        session_start();
        $orderInfor = isset($_POST['orderInfor']) ? $_POST['orderInfor'] : [];
        $carts = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

        foreach ($carts as $cart) {
            if ($cart['id'] == $orderInfor['id']) {
                $cart['quantity'] = $orderInfor['quantity'];
                $cart['total'] = $orderInfor['total'];
            }
        }
        
        $_SESSION['cart'] = $carts;

        header('Content-Type: application/json');
        $response = array('status' => 'success', 'message' => 'Order updated to cart successfully');
        echo json_encode($response);
        exit;
    
    }
 
}


