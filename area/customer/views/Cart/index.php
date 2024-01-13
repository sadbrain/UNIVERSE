<?= load_css("\wwwroot\customer\css\pages\Cart\index.css") ?>
<div class="row p-5 col-12">
    <div class="fs_cart">
        <div class="fs_product">
            <h2><b>Cart</b></h2>
            <div class="breadcrumb">
                <a href="/">
                    <h5>Home</h5>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a class="active">
                    <h5>Your shopping cart</h5>
                </a>
            </div>
        </div>
        <div class="nam_cart">
            <p><b>Product</b></p>
            <p><b>Price</b></p>
            <p><b>Quantity</b></p>
        </div>
        <div class="all_cart">
            <?php
                foreach($carts as $cart){
            ?>
            <div class="inf_cart p-3 border border-radius shadow">
                <div class="row p-2">
                <input type="checkbox" name="cart_id[]" value=<?= $cart['id']?>>

                    <img src="<?= urldecode($cart['thumbnail']) ?>" alt="Giày dép">
                    <div class="ord_cart row ">
                        <div class="col_cart">
                            <div class="infor_cart">
                                <p><?= $cart['name']?></p>
                                <div>
                                    <span>Color:
                                        <div class="color_option" style="background-color: <?= $cart['color'] ?>;"></div>
                                    </span>
                                </div>
                                <div class="size">Size: <?= $cart['size']?></div>
                                <div class="price_cart">
                                    <p>Price: <span class="price"><?= $cart['price'] ?></span> <span class="unit">VND<span></p>
                                </div>
                            </div>
                            <div class="total_cart">
                                <div class="product-price"><span class="total"><?= $cart['total']?></span> VND</div>
                            </div>
                            <div class="action_cart">
                                <div class="quantity_buttons mb-3">
                                    <button id="decrease">-</button>
                                    <input type="number" id="quantity" value=<?= $cart['quantity'] ?>  class="quantity_input">
                                    <button id="increase">+</button>
                                </div>
                                <div>
                                    <a class="edit_cart" href="#"><i class="fa-solid fa-pen"></i></a>
                                    <a  href="<?= '/Customer/Cart/Delete/' . $cart['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                <input name ="id_cart" hidden value="<?= $cart['id']?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>


    </div>

    <div class="spec_detail">
        <p class="specific">Payment Details</p>
        <div class=" tol_detail">
            <p>Total Item Price</p>
            <div class="price_detail total_product_price">0</div>
        </div>
        <div class=" tola_detail">
            <p>Shipping Fee</p>
            <div class="price_detail total-shipping-cost">30000</div>
        </div>
        <hr>
        <div class=" tolal_detail">
            <p>Total payment</p>
            <div class="price_detail total_price">0</div>
        </div>
        <a href="#"><button onclick="navigate_to_Checkout('/Customer/Checkout')">Checkout</button></a>
    </div>
</div>
</div>
<?= load_js("/wwwroot/customer/js/pages/Cart/hanleInfoToCheckout.js")?>
<?= load_js("/wwwroot/customer/js/pages/Cart/updateCart.js")?>