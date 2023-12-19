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
