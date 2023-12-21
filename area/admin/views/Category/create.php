<?php require_once APP_ROOT . "/area/admin/views/Layout/header.php" ?>
<div class="card shadow border-0 mt-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
    <div class="row">
        <div class="col-12 text-center">
                <h2 class="text-white py-2">Create Category</h2>
        </div>
    </div>
    </div>
    <div class="card-body p-4">
        <form id="form-create-category" method="post" class="row">
            <div class="border p-3">
               
                <div class="form-group form-floating py-2 col-12">
                    <input class="form-control border-0 shadow" rules="required" name="name"/>
                    <label class="ms-2">Name</label>
                    <span class="form-message text-danger"></span>
                </div>
                <div class="form-group form-floating py-2 col-12" >
                    <input class="form-control border-0 shadow"  name="slug" />
                    <label class="ms-2">Slug</label>
                </div>
                <div class="form-group form-floating py-2 col-12" >
                    <textarea class="form-control border-0 shadow"  name="description" ></textarea>
                    <label class="ms-2">Description</label>
                </div>
                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control">Create</button>
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
        
        Validator("#form-create-category");
    
</script>
<?php require_once APP_ROOT . "/area/admin/views/Layout/footer.php" ?>
