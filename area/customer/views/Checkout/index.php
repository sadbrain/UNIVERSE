<?= load_css("\wwwroot\customer\css\pages\Checkout\index.css") ?>

<div class="navigation" style="text-align: center;">
    <h2><b>Checkout</b></h2>
    <div class="breadcrumb" style="background-color: transparent; display:flex; justify-content: center; align-items: center; text-align: left;">
        <div>
            <a href=<?= "/" ?>>
                <h5>Home</h5>
            </a>
        </div>
        <div>
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div>
            <a href=<?= "/" ?> style="display: inline;">
                <h5>Checkout</h5>
            </a>
        </div>
    </div>
</div>


<!-- inf contact -->


<div class="flex-container" style="margin-bottom: 100px;">
    <div class="box">
        <p> Contact </p>
        <input type="text" id="fname" name="fname" placeholder="Full name"><br><br>
        <input type="text" id="fname" name="fname" placeholder="Address"><br><br>
        <input type="text" id="fname" name="fname" placeholder="Phone number "><br><br>
        <input type="text" id="fname" name="fname" placeholder="Address email"><br><br>

    </div>
    <div class="method-payment" style="width: 400px; ">
        <h4> Payment</h4>
        <div class="payment">
            <img src="\wwwroot\images\payment\delivery.png" alt="momo" style="width: 30px; height: auto;">
            <i class="fa-solid fa-circle-check" id="circleIcon"></i>
        </div>
        <div class="payment">
            <img src="\wwwroot\images\payment\Logo-MoMo.webp" alt="momo" style="width: 30px; height: auto;">
            <i class="fa-solid fa-circle-check" id="circleIcon"></i>
        </div>
        <div class="payment">
            <img src="\wwwroot\images\payment\vnPaypng.png" alt="momo" style="width: 30px; height: auto;">
            <i class="fa-solid fa-circle-check" id="circleIcon"></i>
        </div>

        <button type="submit" class="btn btn-default ">Pay now</button>

    </div>



</div>