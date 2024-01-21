<?php
require_once APP_ROOT . "/app/AppController.php";
class CheckoutController extends AppController
{
    function __construct($unit_of_work)
    {
        parent::__construct($unit_of_work);
    }
    function Index(){
        $cart_id = isset($_POST["cart_id"]) ? $_POST["cart_id"] : "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $carts_in_db = isset($_SESSION["cart"]) ? $_SESSION["cart"] : null;
            $carts = [];
            foreach($carts_in_db  as $cart){
                if (in_array($cart["id"], $cart_id)) {
                    $carts[] = $cart;
                }
            }
            return $this -> view("Checkout/index",compact("carts"));
        }        
    }
    function PaymentFunc(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){


            $order_details = isset($_POST["OrderDetail"]) ? $_POST["OrderDetail"] : null;
            $order_num = count($order_details["id"]);
            for ($i =0; $i < $order_num; $i++){
                $order = new Order();
                $payment = new PaymentDetail();
                $order_detail = new OrderDetail();
                $this -> unit_of_work -> get_payment_detail() -> to_payment_detail($payment, $_POST["Payment"]);
                $this -> unit_of_work -> get_order() -> to_order($order, $_POST["Order"]);


                $order -> set_status("PENDING");
                $order -> set_created_at(new DateTime());
                $total = $order_details["product_price"][$i] * $order_details["product_quantity"][$i];
                $order -> set_total($total);
                $order -> set_shipping_cost(30000);
                $this -> unit_of_work -> get_order() -> add($order);
                $new_order = $this -> unit_of_work -> get_order() -> get_last_entity();

                $payment -> set_order_id($new_order -> get_id());
                $this -> unit_of_work -> get_payment_detail() -> add($payment);

                $order_detail -> set_product_name($order_details["product_name"][$i]);
                $order_detail -> set_product_quantity($order_details["product_quantity"][$i]);
                $order_detail -> set_product_price($order_details["product_price"][$i]);
                $order_detail -> set_product_color($order_details["product_color"][$i]);
                $order_detail -> set_product_size($order_details["product_size"][$i]);
                $order_detail -> set_product_id($order_details["product_id"][$i]);
                $order_detail -> set_order_id($new_order -> get_id());
                $product = $this -> unit_of_work -> get_product() -> get($order_details["product_id"][$i]);
                $product_price = $product -> get_price();

                if($product_price == $order_detail -> get_product_price()){
                    $order_detail -> set_product_discount_price(0);
                }else{
                    $discount_price = ($product_price - $order_detail -> get_product_price())/ $product_price * 100;
                    $order_detail -> set_product_discount_price($discount_price);    
                }
                $this -> unit_of_work -> get_order_detail() -> add($order_detail);
                $_SESSION["success"]="You have placed your order successfully";

                CheckoutController ::  redirect("/");
                // gia sau khi giam gia = gia goc - discount * gia goc
            }

        }
    }
}


