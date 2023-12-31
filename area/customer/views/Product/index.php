<title>Product Page</title>
<link rel="stylesheet" href="<?php echo URL_ROOT.URL_SUBFOLDER."/area/customer/views/Product/index.css"?>" />
</head>
<body>
<div class="product_page mb-5">
    <div class="fs_product">
    <h2><b>Fashion</b></h2>
    <div class="breadcrumb">
        <a  href=<?= "/" . URL_SUBFOLDER . "/"?>><h5>Home</h5></a>
        <i class="fa-solid fa-chevron-right"></i>
        <a class=" <?= $brand==null ? "active" : null?>" href=<?= "/" . URL_SUBFOLDER . "/Customer/Product"?>><h5>Fashion</h5></a>
        <?php if($brand != null):?>
            <i class="fa-solid fa-chevron-right"></i>
            <a class="active" href="#"><h5><?=$brand?></h5></a>
        <?php endif?>
        
    </div>
    </div>
    
    <div class="category_buttons">
        <?php
            foreach($categories as $cate):
                if($brand != null):
        ?>
        
        <a  href=<?= "/" . URL_SUBFOLDER . "/Customer/Product?category_id=".$cate -> get_id() ."&brand=".$brand?>><button class="<?= $category -> get_name() == $cate -> get_name() ? "active" : null?>"><?= $cate -> get_name()?></button></a>
        <?php else:?>    
        <a  href=<?= "/" . URL_SUBFOLDER . "/Customer/Product?category_id=".$cate -> get_id()?>><button class="<?= $category -> get_name() == $cate -> get_name() ? "active" : null?>"><?= $cate -> get_name()?></button></a>
        <?php endif?>    
        
        <?php endforeach?>    
    </div>
    
    <div class="product_main">
        <?php
            foreach($products as $obj){
                $product = $obj['Product'];
                $discount = $obj['Discount'];
                $product_inventory = $obj['ProductInventory'];
        ?>
            <div class="product_info">
                <a class="d-block" href=<?="/" . URL_SUBFOLDER . "/Customer/Product/Detail/". $product-> get_id()?>>
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
                </a>

            </div>
        <?php }?>    
        

    
    </div>
    <div class="button-container mt-5">
    <a href="#"><button><i class="fa-solid fa-chevron-left"></i> Pre</button></a>
    <a href="#"><button class="active">1</button></a>
    <a href="#"><button>2</button></a>
    <a href="#"><button>3</button></a>
    <a href="#"><button>...</button></a>
    <a href="#"><button>4</button></a>
    <a href="#"><button>Next <i class="fa-solid fa-chevron-right"></i></button></a>
</div> 
</div>

