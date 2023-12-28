<div class="card shadow border-0 mt-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
    <div class="row">
        <div class="col-12 text-center">
            
                <h2 class="text-white py-2"><?= $category -> get_id() != 0 ? "Update" : "Create"?> Category</h2>
        </div>
    </div>
    </div>
    <div class="card-body p-4">
        <form id="form-upsert-category" action=<?="/" . URL_SUBFOLDER . "/Admin/Category/UpsertPost/" .$category -> get_id() ?> method="post" class="row">
            <div cl ass="border p-3">
               
                <div class="form-group form-floating py-2 col-12">
                    <input class="form-control border-0 shadow" rules="required" name="name" value ="<?= $category -> get_id() != 0 ? $category -> get_name() : null?>"/>
                    <label class="ms-2">Name</label>
                    <span class="form-message text-danger"></span>
                </div>
                <div class="form-group form-floating py-2 col-12" >
                    <textarea class="form-control border-0 shadow"  name="description" value=<?= $category -> get_id() != 0 ? $category -> get_description() : null?>><?= $category -> get_id() != 0 ? $category -> get_description() : null?></textarea>
                    <label class="ms-2">Description</label>
                </div>


                <input hidden name="id" value="<?=$category -> get_id()?>">
                <input hidden name="slug" value="<?=$category -> get_slug()?>">
                <input hidden name="created_by" value="<?=$category -> get_created_by()?>">
                <input hidden name="updated_by" value="<?=$category -> get_updated_by()?>">
                <input hidden name="deleted_by" value="<?=$category -> get_deleted_by()?>">
                <input hidden name="created_at" value="<?=$category -> get_created_at() ? htmlspecialchars($category -> get_created_at() -> format('Y-m-d H:i:s')) : null?>">
                <input hidden name="updated_at" value="<?=$category -> get_updated_at() ? htmlspecialchars($category -> get_updated_at() -> format('Y-m-d H:i:s')) : null?>">
                <input hidden name="deleted_at" value="<?=$category -> get_deleted_at() ? htmlspecialchars($category -> get_deleted_at() -> format('Y-m-d H:i:s')) : null?>">

                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control"><?= $category -> get_id() != 0 ? "Update" : "Create"?></button>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href=<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Category"?> class="btn btn-info btn-outline-primary border form-control">
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
        
        Validator("#form-upsert-category");

</script>
