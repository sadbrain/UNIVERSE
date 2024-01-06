<div class="card shadow border-0 m-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
    <div class="row">
        <div class="col-12 text-center">
            
                <h2 class="text-white py-2">Create User</h2>
        </div>
    </div>
    </div>
    <div class="card-body p-4">
        <form id="form-create-user" action="/Admin/User/CreatePost" method="post" class="row">
            <div cl ass="border p-3">
               
                <div class="form-group form-floating py-2 col-12">
                    <input class="form-control border-0 shadow" rules="required" name="name"/>
                    <label class="ms-2">Name</label>
                    <span class="form-message text-danger"></span>
                </div>
                <div class="form-group form-floating py-2 col-12" >
                    <input class="form-control border-0 shadow" rules="required" name="email"/>
                    <label class="ms-2">Email</label>
                    <span class="form-message text-danger"></span>

                </div>

                <div class="form-group form-floating py-2 col-12" >
                    <input class="form-control border-0 shadow" rules="required" name="password"/>
                    <label class="ms-2">Password</label>
                    <span class="form-message text-danger"></span>

                </div>

                <input hidden name="id">
                <input hidden name="role">
                <input hidden name="created_by" >
                <input hidden name="updated_by">
                <input hidden name="deleted_by">
                <input hidden name="created_at" >
                <input hidden name="updated_at">
                <input hidden name="deleted_at">

                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control">Create</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href=<?="/Admin/User"?> class="btn btn-info btn-outline-primary border form-control">
                            Back to List
                        </a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>


<?= load_js('/wwwroot/lib/js/Validator.js')?>
<script>
        
        Validator("#form-create-user");

</script>