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
                                    <p>Price: <?= $cart['price'] ?>VND</p>
                                </div>
                            </div>
                            <div class="total_cart">
                                <div class="product-price"><?= $cart['total'] ?>VND</div>
                            </div>
                            <div class="action_cart">
                                <div class="quantity_buttons mb-3">
                                    <button id="decrease">-</button>
                                    <input type="text" id="quantity" value=<?= $cart['quantity'] ?> readonly class="quantity_input">
                                    <button id="increase">+</button>
                                </div>
                                <div>
                                    <a href="#"><i class="fa-solid fa-pen"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>


    </div>

    <div class="spec_detail">
        <p class="specific">Chi Tiết Thanh Toán</p>
        <div class=" tol_detail">
            <p>Tổng Tiền Hàng</p>
            <div class="price_detail">1.400.000VND</div>
        </div>
        <div class=" tola_detail">
            <p>Tổng Phí Vận Chuyển</p>
            <div class="price_detail">60.000VND</div>
        </div>
        <hr>
        <div class=" tolal_detail">
            <p>Tổng Thanh Toán</p>
            <div class="price_detail">1.460.000VND</div>
        </div>
        <a href="#"><button>Checkout</button></a>
    </div>
</div>
</div>