<?php require_once APP_ROOT . "/area/admin/views/Layout/header.php" ?>
<div class="card shadow border-0 mt-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white py-2">Category List</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <div class="row pb-3">
            <div class="col-6">
            </div>
            <div class="col-6 text-end">
                <a href=<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Category/Create"?> class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>  Create New Category
                </a>
            </div>
        </div>

        <table id="tblData" class="table table-bordered table-striped">
         <thead>
                <th>Name</th>
                <th>Slug</th>
                <th>Create at</th>
                <th></th>
            </thead>
            <tbody>
                    <?php foreach($categories as $category):
                        if($category -> get_deleted_at() != null || $category -> get_deleted_by()){
                            continue;
                        }?>
                    
                        <tr>
                            <td><?= $category -> get_name()?></td>
                            <td><?= $category -> get_slug()?></td>
                            <td>
                                <?= $category -> get_created_at() -> format('Y-m-d H:i:s')?>
                            </td>
                            <td>
                                <div class="w-75 btn-group" role="group">
                                    <a asp-controller="Category" asp-action="Edit" asp-route-id="@obj.Id" class="btn btn-primary mx-2">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a asp-controller="Category" asp-action="Delete" asp-route-id="@obj.Id" class="btn btn-danger mx-2">
                                        <i class="bi bi-trash-fill"></i> Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
  
        </table>

    </div>
</div>

<?php require_once APP_ROOT . "/area/admin/views/Layout/footer.php" ?>