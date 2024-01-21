<?= load_css("/wwwroot/customer/css/pages/Home/index.css") ?>
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
    <span class="carousel-control-prev-icon" aria-hidden="true" style="color:red"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<ul class="list-brand nav col-12 justify-content-center my-5">
  <li class="nav-item"><a href="/Customer/Product?brand=Chanel" class="nav-link">CHANEL</a></li>
  <li class="nav-item"><a href="/Customer/Product?brand=Prada" class="nav-link">PRADA</a></li>
  <li class="nav-item"><a href="/Customer/Product?brand=Denim" class="nav-link">DENIM</a></li>
  <li class="nav-item"><a href="/Customer/Product?brand=Louis vuitton" class="nav-link">LOUIS VUITTON</a></li>
  <li class="nav-item"><a href="/Customer/Product?brand=Calvin Klein" class="nav-link">CALVIN KLEIN</a></li>
</ul>
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
        <?php for ($i = 0; $i < count($product_best_rating); $i++) : ?>
          <div class="carousel-item <?= $i == 0 ? "active" : null ?>">
            <a class="d-block" href=<?= "Customer/Product/Detail/" . $product_best_rating[$i]->get_id() ?>>
              <img src=<?= $product_best_rating[$i]->get_thumbnail() ?> class="d-block w-100" alt="First product">
              <div class="carousel-caption d-none d-md-block">

              </div>
            </a>

          </div>


        <?php endfor ?>
      </div>
    </div>
  </section>
</div>


<div class="product_main mb-5">
  <?php
  foreach ($products as $obj) {
    $product = $obj['Product'];
    $discount = $obj['Discount'];
    $product_inventory = $obj['ProductInventory'];
  ?>
    <div class="product_info">
      <a class="d-block" href="<?="/Customer/Product/Detail/" . $product->get_id() ?>">
        <img src="<?= "/".  $product->get_thumbnail() ?>" alt="Fashion Product Image" />
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
