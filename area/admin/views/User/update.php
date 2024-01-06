<div class="card shadow border-0 m-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
        <div class="row">
            <div class="col-12 text-center">

                <h2 class="text-white py-2">Update User</h2>
            </div>
        </div>
    </div>
    <div class="card-body p-4">
        <form id="form-create-user" action=<?= "/Admin/User/UpdatePost/" . $user->get_id()  ?> method="post" class="row">
            <div cl ass="border p-3">

                <div class="form-group form-floating py-2 col-12">
                    <input class="form-control border-0 shadow" rules="required" name="name" value="<?= $user->get_name() ?>" />
                    <label class="ms-2">Name</label>
                    <span class="form-message text-danger"></span>
                </div>
                <div class="form-group form-floating py-2 col-12">
                    <input class="form-control border-0 shadow" rules="required|email" name="email" value="<?= $user->get_email() ?>" />
                    <label class="ms-2">Email</label>
                    <span class="form-message text-danger"></span>

                </div>

                <div class="form-group form-floating py-2 col-12">
                    <input type="password" class="form-control border-0 shadow" rules="required|password" name="password" value="<?= $user->get_password() ?>" />
                    <label class="ms-2">Password</label>
                    <span class="form-message text-danger"></span>

                </div>

                <input hidden name="id" value="<?= $user->get_id() ?>">
                <input hidden name="role" value="<?= $user->get_role() ?>">
                <input hidden name="created_by" value="<?= $user->get_created_by() ?>">
                <input hidden name="updated_by" value="<?= $user->get_updated_by() ?>">
                <input hidden name="deleted_by" value="<?= $user->get_deleted_by() ?>">
                <input hidden name="created_at" value="<?= $user->get_created_at() ? htmlspecialchars($user->get_created_at()->format('Y-m-d H:i:s')) : null ?>">
                <input hidden name="updated_at" value="<?= $user->get_updated_at() ? htmlspecialchars($user->get_updated_at()->format('Y-m-d H:i:s')) : null ?>">
                <input hidden name="deleted_at" value="<?= $user->get_deleted_at() ? htmlspecialchars($user->get_deleted_at()->format('Y-m-d H:i:s')) : null ?>">


                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control">Update</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href=<?= "/Admin/User" ?> class="btn btn-info btn-outline-primary border form-control">
                            Back to List
                        </a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>


<?= load_js('/wwwroot/lib/js/Validator.js') ?>
<script>
    Validator("#form-create-user");
</script>