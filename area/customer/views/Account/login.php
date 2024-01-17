<?= load_css("\wwwroot\customer\css\pages\Account/login.css")?>
<div class="login_container my-5">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Jbq-w6NLK1GVWCEZ3GVqlY71x82PbWXDr2JHG8Z0H_8zs54z" alt="Ảnh mẫu">
        <div class="form_login">
            <h2>Universe</h2>
            <h3>Sign In to Universe</h3>
            <div class="additional_buttons">
                <button><i class="fab fa-google"></i> Sign in with Google</button>
                <button><i class="far fa-envelope"></i> Sign in with Email</button>
            </div>
            <form class="login_form" action="/Customer/Account/LoginPost" method="Post">
                <div class="form_group">
                    <input class="form-control border-0 shadow"  name="email" placeholder="Email"/>
                     <span class="form-message text-danger"><?= empty($errors['email']) ? "" : $errors['email']; 
                ?></span>
                </div>
                <div class="form_group">
                    <input type="password" class="form-control border-0 shadow"  name="password" placeholder="Password"/>
                    <span class="form-message text-danger"><?= empty($errors['password']) ? "" : $errors['password']; 
                    ?></span>
                </div>
                
                <div class="form_group" >
                    <button class="btn_login" type="submit" >Sign In</button>
                </div>
                <div class="form_group">
                    <button class="btn_register" type="button" >           
                        <a href=<?="/Customer/Account/Register"?>>
                            Sign Up Now
                        </a>
                    </button>
                </div>
            </form>
        </div>
    </div>