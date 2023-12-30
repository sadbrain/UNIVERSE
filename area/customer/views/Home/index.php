<link rel="stylesheet" href="<?php echo URL_ROOT.URL_SUBFOLDER."/area/customer/views/Home/index.css"?>" />

<div class="product_main">
        <?php
            foreach($products as $obj){
                $product = $obj['Product'];
                $discount = $obj['Discount'];
                $product_inventory = $obj['ProductInventory'];
        ?>
            <div class="product_info">
                <img
                src="<?=URL_ROOT.URL_SUBFOLDER. '/'.$product -> get_thumbnail()?>"
                alt="Fashion Product Image"/>
                <div class="p-3">
                        <a href="javascript:void(0)"
                        ><h5><b><?=$product -> get_name()?></b></h5></a
                    >
                    <h6 class="brand"><b><?=$product -> get_brand()?></b></h6>
                        <p class="price-container">
                            <?php
                                $current_date = new DateTime();
                                $discount_to = $discount -> get_discount_to();
                                if($current_date <= $discount_to){
                                    $price = $product -> get_price();
                                    $discount_price = ($price-$price * $discount-> get_discount_price()/100);
                                    echo "  <span class='discounted-price'>".$discount_price."</span>
                                            <span class='unit'>VND</span>
                                            <span class='original-price'>".$price."</span>
                                            <span class='unit'>VND</span>";
                                }else{
                                    echo"<span class=''>".$product -> get_price()."</span>
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
                        <h6 class="quantity"><?= $product_inventory -> get_quantity_buyed() . " sold"?></h6>
                    </div>
                </div>
            </div>
        <?php }?>    
        

    
    </div>