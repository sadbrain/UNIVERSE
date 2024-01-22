 <title>Details Page</title>
<?= load_css("/wwwroot/customer/css/pages/Product/detail.css") ?>
<div class="main_detail">
    <div class="fs_product">
        <h2><b>Detail</b></h2>
        <div class="breadcrumb">
            <a href=<?= "/" ?>>
                <h5>Home</h5>
            </a>
            <i class="fa-solid fa-chevron-right"></i>
            <a class="active" href="#">
                <h5>Detail</h5>
            </a>
        </div>
    </div>
    <div class="info_detail">
    <input hidden name='id' value='<?php echo $product-> get_id()?>'>

        <img class="pro-thumb" src="<?= '/' . $product->get_thumbnail() ?>" alt="Dễ Thương Dép Lê Chống Trượt Thời Trang Mùa Thu Dạo Phố Đáng Yêu 2023">
        <div class="spec_detail">
            <p class="pro-name"><b> <?= $product->get_name() ?></b></p>
            <div class="rat_detail">
                <div class="star_rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p><?= $product->get_rating() . " ratings" ?></p>
                <p> <?= $product_inventory->get_quantity_buyed() . ' sold ' ?></p>
            </div>
            <p class="price-container">
                <?php
                $current_date = new DateTime();
                $discount_to = $discount->get_discount_to();
                if ($current_date <= $discount_to) {
                    $price = $product->get_price();
                    $discount_price = ($price - $price * $discount->get_discount_price() / 100);
                    echo "  <span  class='pro-price discounted-price'>" . $discount_price . "</span>
                                            <span class='unit'>VND</span>
                                            <span class='original-price'>" . $price . "</span>
                                            <span class='unit'>VND</span>";
                } else {
                    echo "<span class='pro-price'>" . $product->get_price() . "</span>
                                    <span class='unit'>VND</span>";
                }
                ?>

            </p>
            <p class="siz"><b>Size</b></p>
            <div class="but_detail">
                <?php
                $size = $product_inventory->get_size();
                if ($size != null) {
                    $size_arr = explode(" ", $size);
                    foreach ($size_arr as $value) {
                        echo  "<button class=''> <input type='radio' name='size' value=$value> $value </button>";
                    }
                }
                ?>

            </div>
            <p class="siz"><b>Color</b></p>

            <div class="color_options">

                <?php
                $color = $product_inventory->get_color();
                $color_arr = explode(" ", $color);
                foreach ($color_arr as $value) {
echo  " <div class='color_option' style='background-color: " . $value . ";'><input type='radio' name='color' value=$value></div> ";
                }

                ?>
            </div>

            <p class="siz"><b>Quantity</b></p>
            <div class="checkout_detail">
                <div class="quantity_buttons">
                    <button id="decrease">-</button>
                    <input type="number" id="quantity" name="quantity"  class="quantity_input" value="0">
                    <button id="increase">+</button>
                </div>
                <a href="#"><button onclick="addToCart()"> Add to cart</button></a>
            </div>
        </div>
    </div>

    <div class="inf">
        <p>PRODUCT DESCRIPTION</p>
    </div>
    <p>
        <?= $product->get_description();
        ?>
    </p>



    <div class="inf">
        <p>OTHER PRODUCTS OF THE SHOP</p>
    </div>

    <div class="product_main">
        <?php
        foreach ($products as $obj) {
            $product = $obj['Product'];
            $discount = $obj['Discount'];
            $product_inventory = $obj['ProductInventory'];
        ?>
            <div class="product_info">
                <a class="d-block" href=<?=  "/Customer/Product/Detail/" . $product->get_id() ?>>
                    <img  src="<?=  '/' . $product->get_thumbnail() ?>" alt="Fashion Product Image" />
                    <div class="p-3">
                        <a href="javascript:void(0)">
                            <h5><b><?= $product->get_name() ?></b></h5>
                        </a>
                        <h6 class="brand"><b><?= $product->get_brand() ?></b></h6>
                        <p class="price-container">
                            <?php
                            $current_date = new DateTime();
                            $discount_to = $discount->get_discount_to();
                            if ($current_date <= $discount_to) {
                                $price = $product->get_price();
                                $discount_price = ($price - $price * $discount->get_discount_price() / 100);
                                echo "  <span class='discounted-price'>" . $discount_price . "</span>
                                            <span class='unit'>VND</span>
                                            <span class='original-price'>" . $price . "</span>
                                            <span class='unit'>VND</span>";
                            } else {
                                echo "<span class=''>" . $product->get_price() . "</span>
                                    <span class='unit'>VND</span>";
                            }
                            ?>

                        </p>
                        <div class="product_action">
                            <div class="star_rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6 class="quantity"><?= $product_inventory->get_quantity_buyed() . " sold" ?></h6>
                        </div>
                    </div>
                </a>

            </div>
        <?php } ?>


    </div>
</div>
<script src="\wwwroot\customer\js\pages\Cart\cart.js"></script>