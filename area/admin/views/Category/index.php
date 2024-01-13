<div class="card shadow border-0 m-4">
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
                <a href=<?="/Admin/Category/Upsert"?> class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>  Create New Category
                </a>
            </div>
        </div>
        <table id="tblData" class="table table-bordered table-striped">
            <thead> 
                <th>Stt</th> 
                <th>Name</th> 
                <th>Created by</th> 
                <th>Created at</th> 
                <th></th> 
            </thead> 
            <tbody> 
                <?php $i = 1; foreach($categories as $category): ?> 
                        <tr>
                            <td><?= $i++;?></td> 
                            <td><?= $category -> get_name()?></td> 
                            <td><?= $category -> get_created_by()?></td> 
                            <td><?= $category -> get_created_at() -> format('Y-m-d H:i:s')?> </td> 
                            <td> 
                                <div class="w-75 btn-group" role="group"> 
                                    <a href=<?="/Admin/Category/Upsert/".$category -> get_id()?> class="btn btn-primary mx-2"> 
                                        <i class="bi bi-pencil-square"></i> Edit 
                                    </a> 
                                    <a onclick="Delete('<?='/Admin/Category/Delete/'.$category -> get_id()?>')" class="btn btn-danger mx-2"> 
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
<?= load_js("/wwwroot/admin/js/pages/Category/category.js")?>
<?php require_once APP_ROOT . "/area/admin/views/Partial/_notification.php" ?>
