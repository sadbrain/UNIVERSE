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
    <link rel="stylesheet" href="<?= URL_ROOT . URL_SUBFOLDER . "/wwwroot/css/bootstrap_theme.css" ?>">
    <link rel="stylesheet" href="<?= URL_ROOT . URL_SUBFOLDER . "/area/admin/views/Layout/header.css" ?>">
    <link rel="stylesheet" href="<?= URL_ROOT . URL_SUBFOLDER . "/area/admin/views/Layout/footer.css" ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?=URL_ROOT . URL_SUBFOLDER?>">Universe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" href="<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Home"?>">Home
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Home"?>">Login
            </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" onclick="show_list_managment()">Content Managment</a>
                <div class="dropdown-menu" id="list_managment">
                    <a class="dropdown-item" href="<?=URL_ROOT . URL_SUBFOLDER ."/Admin/Category"?>">Category</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Product</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Order</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
        </ul>

        </div>
    </div>
    </nav>
</header>
