<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= URL_ROOT . URL_SUBFOLDER . "/wwwroot/css/site.css" ?>">
    <link rel="stylesheet" href="<?= URL_ROOT . URL_SUBFOLDER . "/views/shared/header.css" ?>">
    <link rel="stylesheet" href="<?= URL_ROOT . URL_SUBFOLDER . "/views/shared/footer.css" ?>">

    <style>
    </style>
</head>

<body>
    <header>
        <div class="header">
            

            <h3><a class="navbar-brand" href="<?=URL_ROOT . URL_SUBFOLDER?>">UNIVERSEPINK</a></h3>
            <div class="search_header">
                <input type="text" name="search" placeholder="search">
                <i class="fa-brands fa-searchengin"></i>
            </div>
            <div class="menu">
                <ul>
                    <li><a href=<?= "/" . URL_SUBFOLDER . "/"?>>Home</a></li>
                    <li><a href= <?= "/" . URL_SUBFOLDER . "/Customer/Product"?>>Product</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">About Us</a></li>
                </ul>
            </div>
            <!-- <div class="auth-buttons">
                <button>Sign In</button>
                <button>Sign Up</button>
            </div> -->
            <div class="auth-buttons">
                <img src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png">
            </div>
        </div>
    </header>

