<?php
require_once APP_ROOT . "/app/AppController.php";
class CartController extends AppController
{
    function __construct($unit_of_work)
    {
        parent::__construct($unit_of_work);
    }
    function Index(){
        $carts = isset($_SESSION['cart'])? $_SESSION['cart']:[];
        return $this -> view("Cart/index", compact('carts'));
    }
    function Create(){
        $orderInfor = isset($_POST['orderInfor']) ? json_decode($_POST['orderInfor'], true) : null;
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        if (!$orderInfor){
            $this -> json(array('status' => 'fail', 'message' => 'Order is not added to cart successfully'));

        }
        $_SESSION['cart'][] = $orderInfor;
        $this -> json(array('status' => 'success', 'message' => 'Order added to cart successfully'));
    }
    function Delete(?int $id){
        if($id == 0 || $id == null){
            echo "Page not found";
            return;
        }
        $carts = isset($_SESSION['cart'])? $_SESSION['cart']:[];
        foreach($carts as $key => $cart){
            if($cart['id']== $id){
                unset($carts[$key]);
            }
        }

        $_SESSION["cart"] = $carts;
        $_SESSION["success"] = "Cart has been successfully deleted";
        CartController::redirect("/Customer/Cart");

    }
    function Update() {
        $orderInfor = isset($_POST['orderInfor']) ? json_decode($_POST['orderInfor'], true) : [];
        if (!$orderInfor){
            $this -> json(array('status' => 'fail', 'message' => 'Order is not updated to cart successfully'));

        }
        $carts = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];


        foreach ($carts as $key => $cart) {
            if ($cart['id'] == $orderInfor['id']) {
                $carts[$key]['quantity'] = $orderInfor['quantity'];
                $carts[$key]['total'] = $orderInfor['total'];
            }
        }

        $_SESSION['cart'] = $carts;
        var_dump($_SESSION["cart"]);
        header('Content-Type: application/json');
        $response = array('status' => 'success', 'message' => 'Order updated to cart successfully');
        echo json_encode($response);
        exit;
    }
}