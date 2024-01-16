<div class="card shadow border-0 m-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white py-2">Product List</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="row pb-3">
            <div class="col-6">
            </div>
            <div class="col-6 text-end">
                <a href=<?="/Admin/Product/Upsert"?> class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>  Create New Product
                </a>
            </div>
        </div>
        <table id="tblData" class="table table-bordered table-striped">
             <thead> 
                <!--<th>STT</th> -->
                <th>Name</th> 
                <th>Price</th> 
                <th>Discount</th> 
                <th>Quantity</th> 
                <th>Quantity buyed</th>     
                <th>Create at</th> 
                <th>Create by</th> 
                <th></th> 
            </thead> 
            <!--<tbody> 
                <?php $i = 1; 
                    $current_date = new DateTime();
                    foreach($productvm_list as $productvm):?> 
                        <tr>
                            <td><?= $i++;?></td>    
                            <td><?= $productvm -> get_product() -> get_name()?></td> 
                            <td><?= $productvm -> get_product() -> get_price()?></td> 
                            <td><?php
                                if($productvm -> get_discount() != null && $current_date < $productvm -> get_discount() -> get_discount_to()){
                                    echo $productvm -> get_discount() -> get_discount_price() . "%";
                                }else{
                                    echo "Currently not discounted";
                                }
                            ?></td> 
                            <td><?= $productvm -> get_product_inventory() -> get_quantity()?></td> 
                            <td><?= $productvm -> get_product_inventory() -> get_quantity_buyed()?></td> 
                            <td><?= $productvm -> get_product() -> get_created_at() -> format('Y-m-d H:i:s')?></td> 
                            <td><?= $productvm -> get_product() -> get_created_by()?></td> 
                            <td> 
                                <div class="w-75 btn-group" role="group"> 
                                    <a href=<?="/Admin/Product/Upsert/".$productvm -> get_product() -> get_id()?> class="btn btn-primary mx-2"> 

                                         <i class="bi bi-pencil-square"></i> Edit 

                                    </a> 
                                    <a onclick="Delete('<?='/Admin/Product/Delete/'.$productvm -> get_product() -> get_id()?>')" class="btn btn-danger mx-2"> 
                                        <i class="bi bi-trash-fill"></i> Delete 
                                    </a> 
                                </div> 
                            </td>
                         </tr> 
                <?php endforeach; ?>
             </tbody>-->
         </table>
       
    </div>
</div>
<?= load_js("/wwwroot/admin/js/pages/Product/product.js")?>
<?php require_once APP_ROOT . "/area/admin/views/Partial/_notification.php" ?>
