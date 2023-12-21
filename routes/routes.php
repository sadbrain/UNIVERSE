<?php
$router = Router::get_router();
$router->add("/" . URL_SUBFOLDER . "/Home", "customer", "HomeController", "index");
$router->add("/" . URL_SUBFOLDER . "/", "customer", "HomeController", "index");
// $router->add("/" . URL_SUBFOLDER . "/Detail/", "customer", "DetailController", "Index", array('id' => '[0-9]+'));
// $router->add("/" . URL_SUBFOLDER . "/Detail?", "customer", "DetailController", "Index", array('id' => '[0-9]+'));
$router->add("/" . URL_SUBFOLDER . "/Customer/Product", "customer", "ProductController", "index",);
$router->add("/" . URL_SUBFOLDER . "/Customer/Product/", "customer", "ProductController", "detail", array('id' => '[0-9]+'));
$router->add("/" . URL_SUBFOLDER . "/Customer/Product?", "customer", "ProductController", "detail", array('id' => '[0-9]+'));

$router->add("/" . URL_SUBFOLDER . "/Customer/Cart", "customer", "CartController", "index");
$router->add("/" . URL_SUBFOLDER . "/Customer/Checkout", "customer", "CheckoutController", "index");


//admin
$router->add("/" . URL_SUBFOLDER . "/Admin/Home", "admin", "HomeController", "index");
$router->add("/" . URL_SUBFOLDER . "/Admin/Category", "admin", "CategoryController", "index");
$router->add("/" . URL_SUBFOLDER . "/Admin/Category/Create", "admin", "CategoryController", "create");
$router->add("/" . URL_SUBFOLDER . "/Admin/Category/getall", "admin", "CategoryController", "getall");
