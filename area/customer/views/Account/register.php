<form action="/Customer/Account/RegisterPost" method="Post">
    <div class="form-group form-floating py-2 col-12">
        <input class="form-control border-0 shadow"  name="name"/>
        <label class="ms-2">Name</label>
        <span class="form-message text-danger"><?= empty($errors['name']) ? "" : $errors['name']; 
        ?></span>
    </div>
    <div class="form-group form-floating py-2 col-12">
        <input class="form-control border-0 shadow"  name="email"/>
        <label class="ms-2">Email</label>
        <span class="form-message text-danger"><?= empty($errors['email']) ? "" : $errors['email']; 
        ?></span>
    </div>
    <div class="form-group form-floating py-2 col-12">
        <input type="password" class="form-control border-0 shadow"  name="password"/>
        <label class="ms-2">Password</label>
        <span class="form-message text-danger"><?= empty($errors['password']) ? "" : $errors['password']; 
        ?></span>
    </div>
    <div class="form-group form-floating py-2 col-12">
        <input type="password" class="form-control border-0 shadow"  name="con_password"/>
        <label class="ms-2">Confirm Password</label>
        <span class="form-message text-danger"><?= empty($errors['con_password']) ? "" : $errors['con_password']; 
        ?></span>
    </div>
    <div class="row pt-2">
        <div class="col-6 col-md-3">
            <button type="submit" class="btn btn-primary form-control">Resgister</button>
        </div>
        <div class="col-6 col-md-3">
            <a href=<?="/Customer/Account/Login"?> class="btn btn-info btn-outline-primary border form-control">
                Login Now
            </a>
        </div>
    </div>
</form>
