<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= SITE_NAME ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?= load_css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css') ?>
    <?= load_css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <?= load_css('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') ?>
    <?= load_css('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css') ?>
    <?= load_css('/wwwroot/lib/css/site.css') ?>
    <?= load_css('/wwwroot/lib/css/bootstrap_theme.css') ?>
    <?= load_css('/wwwroot/customer/css/layout/header.css') ?>
    <?= load_css('https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css') ?>
    <?= load_css('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') ?>
    <?= load_js("https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js")?>
</head>
    
<body>
    <!-- $items is shared to all pages, check app/AdminController or app/AppController  -->
    <?php require_once get_view('admin', 'Layout/header') ?>
    <?php require_once $content ?>
    <?php require_once get_view('admin', 'Layout/footer') ?>
    
</body>
    <!-- Nên tải về file css, js, k nên dùng link cdn -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
		crossorigin="anonymous"></script>
    <?= load_js('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') ?>
    <?= load_js('//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js') ?>
    <?= load_js('https://cdn.jsdelivr.net/npm/sweetalert2@11') ?>
    <?= load_js('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js') ?>
    <?= load_js('/wwwroot/admin/js/layout/header.js') ?>
</html>