<?php
$product = $productvm -> get_product();
$discount = $productvm -> get_discount();
$product_inventory = $productvm -> get_product_inventory();
?>
<div class="card shadow border-0 mt-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
    <div class="row">
        <div class="col-12 text-center">
            
                <h2 class="text-white py-2"><?= $product -> get_id() != 0 ? "Update" : "Create"?> Product</h2>
        </div>
    </div>
    </div>
    <div class="card-body p-4">
        <form id="form-upsert-productvm" action=<?="/" . URL_SUBFOLDER . "/Admin/Product/UpsertPost/" .$product -> get_id() ?> method="post" class="row">
            <div cl ass="border p-3">
              
                <div class="form-group form-floating py-2 col-12">
                    <input rules="required" class="form-control border-0 shadow"  name="Product[name]" value ="<?= $product -> get_id() != 0 ? $product -> get_name() : null?>"/>
                    <label class="ms-2">Name</label>
                </div>

                <div class="form-group form-floating py-2 col-12" >
                    <textarea class="form-control border-0 shadow"  name="Product[description]" value=<?= $product -> get_id() != 0 ? $product -> get_description() : null?>><?= $product -> get_id() != 0 ? $product -> get_description() : null?></textarea>
                    <label class="ms-2">Description</label>
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <input class="form-control border-0 shadow"  name="Product[slug]" value ="<?= $product -> get_id() != 0 ? $product -> get_slug() : null?>"/>
                    <label class="ms-2">Slug</label>
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <input rules="required|min:100000" type="number" class="form-control border-0 shadow"  name="Product[price]" value ="<?= $product -> get_id() != 0 ? $product -> get_slug() : null?>"/>
                    <label class="ms-2">Price</label>
                </div>

                <div class="form-floating col-12 py-2">
                    <label class="ms-2">Brand</label>
                    <select class="form-select border-0 shadow" name ="Product[brand]">
                        <option  selected>--Select brand--</option>
                        <option  value = "Chanel" selected>Chanel</option>
                        <option  value = "Prada" selected>Prada</option>
                        <option  value = "Denim" selected>Denim</option>
                        <option  value = "Louis vuitton" selected>Louis vuitton</option>
                        <option  value = "Calvin Klein" selected>Calvin Klein</option>

                    </select>
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <input type="number" class="form-control border-0 shadow"  name="Discount[discount_price]" value ="<?= $product -> get_id() != 0 ? $discount -> get_discount_price() : null?>"/>
                    <label class="ms-2">Discount price</label>
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <input type="datetime-local" class="form-control border-0 shadow"  name="Discount[discount_from]" value ="<?= $product -> get_id() != 0 &&   $discount -> get_discount_from() ? htmlspecialchars($discount -> get_discount_from() ->format('Y-m-d H:i:s')) : null?>"/>
                    <label class="ms-2">Discount from</label>
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <input type="datetime-local" class="form-control border-0 shadow"  name="Discount[discount_to]" value ="<?= $product -> get_id() != 0 && $discount -> get_discount_to() ? htmlspecialchars($discount -> get_discount_to() ->format('Y-m-d H:i:s')) : null?>"/>
                    <label class="ms-2">Discount to</label>
                </div>  

                <div class="form-group form-floating py-2 col-12">
                    <input rules="required|min:1" type="number" class="form-control border-0 shadow"  name="ProductInventory[quantity]" value ="<?= $product -> get_id() != 0 ? $product_inventory -> get_quantity() : null?>"/>
                    <label class="ms-2">Quatity</label>
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <input class="form-control border-0 shadow"  name="ProductInventory[size]" value ="<?= $product -> get_id() != 0 ? $product_inventory -> get_size() : null?>"/>
                    <label class="ms-2">Size</label>
                </div>

                <div class="form-group form-floating py-2 col-12">
                    <input class="form-control border-0 shadow"  name="ProductInventory[color]" value ="<?= $product -> get_id() != 0 ? $product_inventory -> get_color() : null?>"/>
                    <label class="ms-2">color</label>
                </div>

                <div class="form-floating col-12 py-2">
                    <label class="ms-2">Category</label>
                    <select class="form-select border-0 shadow" name ="Product[category_id]">
                        <option disabled selected>--Select Category--</option>
                        <?php foreach ($categories as $category):?>
                            <option value="<?=$category -> get_id()?>" selected><?=$category -> get_name()?></option>
                        <?php endforeach?>

                    </select>
                </div>
                <input hidden name="Product[id]" value="<?=$product -> get_id()?>">
                <input hidden name="Product[thumbnail]" value="<?=$product -> get_thumbnail()?>">
                <input hidden name="Product[rating]" value="<?=$product -> get_rating()?>">
                <input hidden name="Product[created_by]" value="<?=$product -> get_created_by()?>">
                <input hidden name="Product[updated_by]" value="<?=$product -> get_updated_by()?>">
                <input hidden name="Product[deleted_by]" value="<?=$product -> get_deleted_by()?>">
                <input hidden name="Product[created_at]" value="<?=$product -> get_created_at() ? htmlspecialchars($product -> get_created_at() -> format('Y-m-d H:i:s')) : null?>">
                <input hidden name="Product[updated_at]" value="<?=$product -> get_updated_at() ? htmlspecialchars($product -> get_updated_at() -> format('Y-m-d H:i:s')) : null?>">
                <input hidden name="Product[deleted_at]" value="<?=$product -> get_deleted_at() ? htmlspecialchars($product -> get_deleted_at() -> format('Y-m-d H:i:s')) : null?>">
               
                <input hidden name="Discount[id]" value="<?=$discount -> get_id()?>">
                <input hidden name="Discount[product_id]" value="<?=$discount -> get_product_id()?>">
                <input hidden name="Discount[created_by]" value="<?=$discount -> get_created_by()?>">
                <input hidden name="Discount[updated_by]" value="<?=$discount -> get_updated_by()?>">
                <input hidden name="Discount[deleted_by]" value="<?=$discount -> get_deleted_by()?>">
                <input hidden name="Discount[created_at]" value="<?=$discount -> get_created_at() ? htmlspecialchars($discount -> get_created_at() -> format('Y-m-d H:i:s')) : null?>">
                <input hidden name="Discount[updated_at]" value="<?=$discount -> get_updated_at() ? htmlspecialchars($discount -> get_updated_at() -> format('Y-m-d H:i:s')) : null?>">
                <input hidden name="Discount[deleted_at]" value="<?=$discount -> get_deleted_at() ? htmlspecialchars($discount -> get_deleted_at() -> format('Y-m-d H:i:s')) : null?>">

                <input hidden name="ProductInventory[id]" value="<?=$product_inventory -> get_id()?>">
                <input hidden name="ProductInventory[product_id]" value="<?=$product_inventory -> get_product_id()?>">
                <input hidden name="ProductInventory[quantity_buyed]" value="<?=$product_inventory -> get_quantity_buyed()?>">
                <input hidden name="ProductInventory[created_by]" value="<?=$product_inventory -> get_created_by()?>">
                <input hidden name="ProductInventory[updated_by]" value="<?=$product_inventory -> get_updated_by()?>">
                <input hidden name="ProductInventory[deleted_by]" value="<?=$product_inventory -> get_deleted_by()?>">
                <input hidden name="ProductInventory[created_at]" value="<?=$product_inventory -> get_created_at() ? htmlspecialchars($product_inventory -> get_created_at() -> format('Y-m-d H:i:s')) : null?>">
                <input hidden name="ProductInventory[updated_at]" value="<?=$product_inventory -> get_updated_at() ? htmlspecialchars($product_inventory -> get_updated_at() -> format('Y-m-d H:i:s')) : null?>">
                <input hidden name="ProductInventory[deleted_at]" value="<?=$product_inventory -> get_deleted_at() ? htmlspecialchars($product_inventory -> get_deleted_at() -> format('Y-m-d H:i:s')) : null?>">
                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control"><?= $product -> get_id() != 0 ? "Update" : "Create"?></button>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href=<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Product"?> class="btn btn-info btn-outline-primary border form-control">
                            Back to List
                        </a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>


<script src=<?=URL_ROOT . URL_SUBFOLDER ."/wwwroot/js/Validator.js"?>></script>
<script>
        
        Validator("#form-upsert-productvm");

</script>
