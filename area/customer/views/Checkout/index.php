<?= load_css("\wwwroot\customer\css\pages\Checkout\index.css") ?>

<div class="navigation" style="text-align: center;">
    <div class="fs_product">
            <h2><b>Checkout</b></h2>
            <div class="breadcrumb">
                <a href=<?= "/" ?>>
                    <h5>Home</h5>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a class="active" href="#">
                    <h5>Checkout</h5>
                </a>
            </div>
        </div>
    </div>


<!-- inf contact -->


<div class="" style="margin-bottom: 100px;">
    <form action="/Customer/Checkout/PaymentFunc" method="post" class="flex-container">
        <div class="box">
            <p> Contact </p>
            <input type="text" id="fname" name="Order[buyer_name]" placeholder="Full name"><br><br>
            <input type="text" id="fname" name="Order[buyer_email]" placeholder="Address"><br><br>
            <input type="text" id="fname" name="Order[buyer_phone]" placeholder="Phone number "><br><br>
            <input type="text" id="fname" name="Order[buyer_address]" placeholder="Address email"><br><br>
            <input  name="Order[total]" hidden>
            <input  name="Order[shipping_cost]" hidden>
            <input  name="Order[created_at]" hidden>
            <input  name="Order[status]" hidden>
            <input  name="Order[id]" hidden>

        </div>
        <div class="method-payment" style="width: 400px; ">
            <h4> Payment</h4>
            <div class="payment">
                <input type="radio" name="Payment[payment_type]" value="delivery">
                <img src="\wwwroot\images\payment\delivery.png" alt="momo" style="width: 30px; height: auto;">
                <i class="fa-solid fa-circle-check" id="circleIcon"></i>
            </div>
            <div class="payment">
             <input type="radio" name="Payment[payment_type]" value="momo">

                <img src="\wwwroot\images\payment\Logo-MoMo.webp" alt="momo" style="width: 30px; height: auto;">
                <i class="fa-solid fa-circle-check" id="circleIcon"></i>
            </div>
            <div class="payment">
             <input type="radio" name="Payment[payment_type]" value="vnpay">

                <img src="\wwwroot\images\payment\vnPaypng.png" alt="momo" style="width: 30px; height: auto;">
                <i class="fa-solid fa-circle-check" id="circleIcon"></i>
            </div>
            <input  name="Payment[expiry]" hidden>
            <input  name="Payment[id]" hidden>
            <input  name="Payment[account]" hidden>
            <input  name="Payment[provider]" hidden>
            <input  name="Payment[order_id]" value=0 hidden>

            <button type="submit" class="btn btn-default ">Pay now</button>
            <?php foreach($carts as $cart):?>
                <input hidden name="OrderDetail[product_name][]" value="<?=$cart["name"]?>">
                <input hidden name="OrderDetail[product_quantity][]" value=<?=$cart["quantity"]?>>
                <input hidden name="OrderDetail[product_price][]" value=<?=$cart["price"]?>>
                <input hidden name="OrderDetail[product_color][]" value=<?=$cart["color"]?>>
                <input hidden name="OrderDetail[product_size][]" value=<?=$cart["size"]?>>
                <input hidden name="OrderDetail[product_id][]" value=<?=$cart["id"]?>>
                <input hidden name="OrderDetail[product_discount_price][]" value=0>
                <input hidden name="OrderDetail[order_id][]" value=0> 
                <input hidden name="OrderDetail[id][]" value=0> 
            <?php endforeach?>
        </div>
    </form>




</div>