
<title>Details Page</title>
<link rel="stylesheet" href="<?php echo URL_ROOT.URL_SUBFOLDER."/area/customer/views/Product/detail.css"?>" />


<div class="main_detail">
    <div class="fs_product">
        <h2><b>Detail</b></h2>
            <div class="breadcrumb">
                <a  href=<?= "/" . URL_SUBFOLDER . "/"?>><h5>Home</h5></a>
                <i class="fa-solid fa-chevron-right"></i>
                <a class="active" href="#"><h5>Detail</h5></a>
            </div>
        </div>
    <div class="info_detail">
        <img src="<?= URL_ROOT. URL_SUBFOLDER. '/'. $product-> get_thumbnail() ?>" alt="Dễ Thương Dép Lê Chống Trượt Thời Trang Mùa Thu Dạo Phố Đáng Yêu 2023">
        <div class="spec_detail">
            <p><b> <?=  $product-> get_name() ?></b></p>
            <div class="rat_detail">
                <div class="star_rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p><?=  $product -> get_rating() . " ratings"?></p>
                <p> <?= $product_inventory-> get_quantity_buyed() . ' sold '?></p>
            </div>
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
            <p class="siz"><b>Size</b></p>
            <div class="but_detail">
              <?php
              $size= $product_inventory -> get_size();
              if ($size != null){
                $size_arr = explode(" ",$size);
                foreach( $size_arr as $value){
                  echo  "<button> $value </button>";
                }
              }
              ?>
                
            </div>
            <p class="siz"><b>Color</b></p>

            <div class="color_options">
              
            <?php
              $color = $product_inventory -> get_color() ;
              $color_arr = explode(" ",$color);
              foreach( $color_arr as $value){
                echo  " <div class='color_option' style='background-color: ".$value.";'></div> "  ;  
              }

              ?>
            </div>

            <p class="siz"><b>Quantity</b></p>
            <div class="checkout_detail">
                <div class="quantity_buttons">
                <button id="decrease">-</button>
                <input type="text" id="quantity" value="1" readonly class="quantity_input">
                <button id="increase">+</button>
                </div>
                <a href=""><button>Add to cart</button></a>
            </div>
        </div>
    </div>

    <div class="inf"><p>PRODUCT DESCRIPTION</p></div>
    <p>
      <?= $product-> get_description (); 
      ?>
    </p>
 
    

    <div class="inf"><p>OTHER PRODUCTS OF THE SHOP</p></div>
            <div class="product_main">
                <div class="product_info">
                  <img
                    src="<?= URL_ROOT . URL_SUBFOLDER . "/wwwroot/images/products/quần_áo_1.jfif"?>"
                    alt="Fashion Product Image"
                  />
                <div class="p-3">
                <a href="javascript:void(0)"
                    ><h5><b>Sét bộ áo nỉ Hộp sữa + quần bom đen...</b></h5></a
                  >
                  <h6 class="brand"><b>Dior</b></h6>
                  <p class="price-container">
                    <span class='discounted-price'>800000</span>
                    <span class='unit'>VND</span>
                    <span class='original-price'>1800000</span>
                    <span class='unit'>VND</span>
                  </p>
                  <div class="product_action">
                    <div class="star_rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h6 class="quantity">4.1k sold</h6>
                  </div>
                </div>

                </div>
                <div class="product_info">
                  <img
                    src="../Assets/img-pro/quần áo 1.jfif"
                    alt="Fashion Product Image"
                  />
                  <a href="javascript:void(0)"
                    ><h5>Sét bộ áo nỉ Hộp sữa + quần bom đen...</h5></a
                  >
                  <h6>Dior</h6>
                  <p>890.000VND</p>
                  <div class="product_action">
                    <div class="star_rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>4.1k sold</h6>
                  </div>
                </div>
                <div class="product_info">
                  <img
                    src="../Assets/img-pro/quần áo 1.jfif"
                    alt="Fashion Product Image"
                  />
                  <a href="javascript:void(0)"
                    ><h5>Sét bộ áo nỉ Hộp sữa + quần bom đen...</h5></a
                  >
                  <h6>Dior</h6>
                  <p>890.000VND</p>
                  <div class="product_action">
                    <div class="star_rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>4.1k sold</h6>
                  </div>
                </div>
                <div class="product_info">
                  <img
                    src="../Assets/img-pro/quần áo 1.jfif"
                    alt="Fashion Product Image"
                  />
                  <a href="javascript:void(0)"
                    ><h5>Sét bộ áo nỉ Hộp sữa + quần bom đen...</h5></a
                  >
                  <h6>Dior</h6>
                  <p>890.000VND</p>
                  <div class="product_action">
                    <div class="star_rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>4.1k sold</h6>
                  </div>
                </div>
                <div class="product_info">
                  <img
                    src="../Assets/img-pro/quần áo 1.jfif"
                    alt="Fashion Product Image"
                  />
                  <a href="javascript:void(0)"
                    ><h5>Sét bộ áo nỉ Hộp sữa + quần bom đen...</h5></a
                  >
                  <h6>Dior</h6>
                  <p>890.000VND</p>
                  <div class="product_action">
                    <div class="star_rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>4.1k sold</h6>
                  </div>
                </div>
                <div class="product_info">
                  <img
                    src="../Assets/img-pro/quần áo 1.jfif"
                    alt="Fashion Product Image"
                  />
                  <a href="javascript:void(0)"
                    ><h5>Sét bộ áo nỉ Hộp sữa + quần bom đen...</h5></a
                  >
                  <h6>Dior</h6>
                  <p>890.000VND</p>
                  <div class="product_action">
                    <div class="star_rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>4.1k sold</h6>
                  </div>
                </div>
                <div class="product_info">
                  <img
                    src="../Assets/img-pro/quần áo 1.jfif"
                    alt="Fashion Product Image"
                  />
                  <a href="javascript:void(0)"
                    ><h5>Sét bộ áo nỉ Hộp sữa + quần bom đen...</h5></a
                  >
                  <h6>Dior</h6>
                  <p>890.000VND</p>
                  <div class="product_action">
                    <div class="star_rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>4.1k sold</h6>
                  </div>
                </div>
                <div class="product_info">
                  <img
                    src="../Assets/img-pro/quần áo 1.jfif"
                    alt="Fashion Product Image"
                  />
                  <a href="javascript:void(0)"
                    ><h5>Sét bộ áo nỉ Hộp sữa + quần bom đen...</h5></a
                  >
                  <h6>Dior</h6>
                  <p>890.000VND</p>
                  <div class="product_action">
                    <div class="star_rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>4.1k sold</h6>
                  </div>
                </div>
                <div class="product_info">
                  <img
                    src="../Assets/img-pro/quần áo 1.jfif"
                    alt="Fashion Product Image"
                  />
                  <a href="javascript:void(0)"
                    ><h5>Sét bộ áo nỉ Hộp sữa + quần bom đen...</h5></a
                  >
                  <h6>Dior</h6>
                  <p>890.000VND</p>
                  <div class="product_action">
                    <div class="star_rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <h6>4.1k sold</h6>
                  </div>
                </div>       
              </div>
        </div>
</div>
