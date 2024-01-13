<div class="card shadow border-0 m-4">
    <div class="card-header bg-secondary bg-gradient ml-0 py-3">
    <div class="row">
        <div class="col-12 text-center">
            
                <h2 class="text-white py-2">Login</h2>
        </div>
    </div>
    </div>
    <div class="card-body p-4">
        <form id="form-login" action=<?="/Admin/Account/LoginPost"?> method="post" class="row">
            <div cl ass="border p-3">
               
                <div class="form-group form-floating py-2 col-12">
                    <input class="form-control border-0 shadow" rules="required|email" name="email"/>
                    <label class="ms-2">Email</label>
                    <span class="form-message text-danger"></span>
                </div>
                <div class="form-group form-floating py-2 col-12" >
                    <input type="password" rules="required|password" class="form-control border-0 shadow"  name="password" />
                    <label class="ms-2">Password</label>
                    <slass="form-message text-danger"></slass=>
                </div>


                
                <div class="row pt-2">
                    <div class="col-6 col-md-3">
                        <button type="submit" class="btn btn-primary form-control">sumbit</button>
                    </div>

                </div>

            </div>
        </form>
    </div>
</div>


<?= load_js('/wwwroot/lib/js/Validator.js')?>
<script>
        
        Validator("#form-login");

</script>
<?php require_once APP_ROOT . "\area\admin/views\Partial\_notification.php"?>