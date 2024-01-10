<?= load_css("/wwwroot/admin/css/pages/Home/index.css") ?>
<div class="growth-chart-container"></div>
<div class="order-quantity-chart my-3">
    <div class="revenue row">
        <div class="col-3">
            <ul class="infor ms-2">
                <li class="border-2">
                    <p>Revenue total</p>
                    <p class="revenue-price">201000000</p>
                </li>
                <li>
                    <p>Current month's revenue</p>
                    <p class="revenue-current-month">10000000</p>
                </li>
                <li>
                    <p>Order total</p>
                    <p class="revenue-price">1366</p>
                </li>
                <li>
                    <p>Order current month</p>
                    <p class="revenue-price">107</p>
                </li>
            </ul>
            
        </div>
        <div class="col-8">
            <canvas id="orders-chart"></canvas>
        </div>
    </div>
</div>
<?php require_once APP_ROOT . "\area\admin/views\Partial\_notification.php"?>
<?= load_js("https://cdn.jsdelivr.net/npm/chart.js")?>
<?= load_js("/wwwroot/admin/js/pages/Home/index.js") ?>
