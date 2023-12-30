<link rel="stylesheet" href="<?= URL_ROOT . URL_SUBFOLDER . '/area/customer/views/Home/index.css' ?>">

  <!-- slider -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block mx-auto rounded" style="width: 60%; max-height: 400px;" src="wwwroot/images/slider/slider2.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block mx-auto rounded" style="width: 60%; max-height: 400px;" src="wwwroot/images/slider/slider2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block mx-auto rounded" style="width: 60%; max-height: 400px;" src="wwwroot/images/slider/slider2.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon color:pink" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- sản phẩm nổi bật-->

  <div class="container" style="display: flex;">

    <section class="home d-block" id="home">
      <div class="content d-block">
        <h3 style="display: block; margin-bottom: 0;">Outstanding products</h3>
        <p style="display: block; margin-top: 0;">Welcome to our premier fashion store! Explore uniqueness and luxury
          in standout products from Gucci, Adidas, and Nike. Be the first to experience new styles and
          sophistication.</p>
      </div>
    </section>
    <section class="slider">
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="wwwroot/images/slider/slider2.jpg" class="d-block w-100" alt="First product">
            <div class="carousel-caption d-none d-md-block">
              <h5>Mũ Gucci</h5>
              <p>Sang trọng, quý phái</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="wwwroot/images/slider/slider2.jpg" class="d-block w-100" alt="Second product">
            <div class="carousel-caption d-none d-md-block">
              <h5>Mũ Adidas</h5>
              <p>Thể thao, năng động</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <div class="product_main mb-5">
        <?php
            foreach($products as $obj){
                $product = $obj['Product'];
                $discount = $obj['Discount'];
                $product_inventory = $obj['ProductInventory'];
        ?>
            <div class="product_info">
              <a class="d-block" href="<?="/" . URL_SUBFOLDER . "/Customer/Product/Detail/". $product-> get_id()?>">
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

