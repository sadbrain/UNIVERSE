<header>
    <div class="header">

        <h3><a class="navbar-brand" href="/">UNIVERSEPINK</a></h3>
        <div class="search_header">
            <input type="text" name="search" placeholder="search">
            <i class="fa-brands fa-searchengin"></i>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/Customer/Product">Product</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="/Customer/Cart"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
        <?php
            if(!isset($_SESSION['user_id'])):
        ?>
        <div class="auth-buttons">
            <button><a href="/Customer/Account/Login">Sign In</a></button>
            <button><a href="/Customer/Account/Register">Sign Up</a></button>
        </div>
        <?php else:?>
        <div class="auth-buttons">
            
            <div class="dropdown">
                <a onclick="show_user_menu()" class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png">
                </a>

                <ul class="dropdown-menu user_menu">
                    <li><a class="dropdown-item" href="/Customer/Account/Logout">Logout</a></li>
                </ul>
            </div>
        </div>

        <?php endif?>
    </div>
</header>
<?=load_js("/wwwroot/customer/js/layout/header.js")?>