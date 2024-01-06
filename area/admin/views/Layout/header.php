<header>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">UNIVERSEPINK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/Admin/Home">Home
                        </a>
                    </li>
                    <?php if(isset($_SESSION["username"])){
                            ?>
                            <div class="auth-buttons">
                            <li class="nav-item">
                                    <a class="nav-link" href="/Admin/Account/Logout">Logout</a>
                                </li>
                            </div>
                            <?php } else{?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/Admin/Account/Login">Login</a>
                                </li>
                            <?php }?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" onclick="show_list_managment()">Content Managment</a>
                        <div class="dropdown-menu" id="list_managment">
                            <a class="dropdown-item" href="/Admin/User">User</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Admin/Category">Category</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Admin/Product">Product</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Admin/Order">Order</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Admin/Payment">Payment Detail</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>

 
                </ul>

            </div>
        </div>
    </nav>
</header>