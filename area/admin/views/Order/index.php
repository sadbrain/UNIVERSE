<div class="card shadow border-0 m-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white py-2">Order List</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <table id="tblData" class="table table-bordered table-striped">
            <thead>
                <!--<th>Stt</th>-->
                <th>Email</th>
                <th>Address</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Discount Price</th>
                <th>Quantity</th>
                <th>Shipping Cost</th>
                <th>Total</th>
                <th>Status</th>
            </thead>
           <!-- <tbody>
                <?php $total_revenue = 0 ?>
                <?php $i = 1;
                foreach ($orders as $order) : ?>
                    <?php if ($order["order"]->get_status() == "DONE") {
                        $total_revenue += $order["order"]->get_total();
                    } ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $order["order"]->get_buyer_email() ?></td>
                        <td><?= $order["order"]->get_buyer_address() ?></td>
                        <td><?= $order["order_detail"]->get_product_name() ?></td>
                        <td><?= $order["order_detail"]->get_product_price() ?></td>
                        <td><?= $order["order_detail"]->get_product_discount_price() ?></td>
                        <td><?= $order["order_detail"]->get_product_quantity() ?></td>
                        <td><?= $order["order"]->get_shipping_cost() ?></td>
                        <td><?= $order["order"]->get_total() ?></td>
                        <td><?= $order["order"]->get_status() ?></td>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody> -->
        </table>

        <div class="row pb-3">
            <div class="col-6">
            </div>
            <div class="col-6 text-end fs-5">
                Total : <?= $total_revenue ?>$
            </div>
        </div>
    </div>
</div>
<?= load_js("/wwwroot/admin/js/pages/Order/order.js") ?>
<?php require_once APP_ROOT . "/area/admin/views/Partial/_notification.php" ?>