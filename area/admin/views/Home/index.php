<?= load_css("/wwwroot/admin/css/pages/Home/index.css") ?>
<?= load_js("https://cdn.jsdelivr.net/npm/chart.js") ?>
<style>
    .revenue .infor{
    width: 24%;
    margin-right: 1%;
}
.revenue .infor li{
    border-radius: 5px;
    box-shadow: 1px 1px 0 0 rgba(255, 255, 255, 0.5);
    padding: 20px;
    margin: 20px 0;
    color:#fff;
    display: flex;
    flex-direction: column;
    font-size: 20px;
}
.revenue .infor li .unit{
    color:greenyellow;
}
.revenue #order_Chart{
    width: 75%!important;
    height: 500px!important;
    font-size: 20px;
}   
</style>
<div class="order-quantity-chart my-5">
    <h3 class="text-center">Order statistics </h3>
    <div class="px-5 row">
        <div class="col-3 fs-4">Select display mode</div>
        <select id="select_order_chart" class="col-5 form-select border-0 shadow">
            <option value="/Admin/Home/GetOrderDaily">Daily</option>
            <option value="/Admin/Home/GetOrderMonthly">MonthLy</option>
            <option value="/Admin/Home/GetOrderYearly">YearLy</option>
        </select>
    </div>

    <div class="revenue row w-100 px-5 mt-3">
        <ul class="infor">
            <li class="shadow">Total revenue
                <span class="unit"><?=$total_revenue?></span>
            </li>
            <li class="shadow">Current monthly revenue
              <span class="unit"><?=$total_revenue_current_month?></span>
            </li>
            <li class="shadow">Total order
              <span class="unit"><?=$total_order?></span>
            </li>
            <li class="shadow">Current monthly orders
              <span class="unit"><?=$total_order_current_month?></span>
            </li>
        </ul>
        <canvas id="order_Chart"></canvas>
    </div>
</div>

<div class="order-quantity-chart mb-5">
    <h3 class="text-center">Traffic statistics </h3>
    <div class="px-5 row">
        <div class="col-3 fs-4">Select display mode</div>
        <select id="select_hit_chart" class="col-5 form-select border-0 shadow">
            <option value="/Admin/Home/GetHitsDaily">Daily</option>
            <option value="/Admin/Home/GetHitsMonthly">MonthLy</option>
            <option value="/Admin/Home/GetHitsYearly">YearLy</option>
        </select>
    </div>

    <div class="revenue row w-100 px-5 mt-3">
        <canvas id="hit_Chart"></canvas>
    </div>
</div>
<?= load_js("\wwwroot\admin\js\pages\Home\index.js") ?>
<?= load_js("\wwwroot\admin\js\pages\Home\orderChart.js") ?>

<?php require_once APP_ROOT . "\area\admin/views\Partial\_notification.php"?>


