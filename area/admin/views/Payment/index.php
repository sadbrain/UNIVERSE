<div class="card shadow border-0 m-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white py-2">Payment List</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <table id="tblData" class="table table-bordered table-striped">
            <thead>
               <!-- <th>Stt</th> -->
                <th>Payment_type</th>
                <th>Provider</th>
                <th>Account</th>
                <th>Expiry</th>
                <th>Order id</th>
            </thead>
            <!--<tbody>
                <?php $i = 1;
                foreach ($payments as $payment) : ?>
         
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $payment ->get_payment_type() ?></td>
                        <td><?= $payment ->get_provider() ?></td>
                        <td><?= $payment ->get_account() ?></td>
                        <td><?= $payment ->get_expiry() ?></td>
                        <td><?= $payment ->get_order_id() ?></td>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>-->
        </table>

    </div>
</div>
<?= load_js("/wwwroot/admin/js/pages/Payment/payment.js") ?>
<?php require_once APP_ROOT . "/area/admin/views/Partial/_notification.php" ?>