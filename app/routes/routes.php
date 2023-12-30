<?php
$router = Router::get_router();
$router->add("/" . URL_SUBFOLDER . "/Home", "customer", "HomeController", "Index");
$router->add("/" . URL_SUBFOLDER . "/", "customer", "HomeController", "Index");
// $router->add("/" . URL_SUBFOLDER . "/Detail/", "customer", "DetailController", "Index", array('id' => '[0-9]+'));
// $router->add("/" . URL_SUBFOLDER . "/Detail?", "customer", "DetailController", "Index", array('id' => '[0-9]+'));
$router->add("/" . URL_SUBFOLDER . "/Customer/Product", "customer", "ProductController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Customer/Product/Index", "customer", "ProductController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Customer/Product/Detail", "customer", "ProductController", "Detail", array('0' => '[0-9]'));
$router->add("/" . URL_SUBFOLDER . "/Customer/Cart/Index", "customer", "CartController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Customer/Checkout/Index", "customer", "CheckoutController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Customer/Cart", "customer", "CartController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Customer/Checkout", "customer", "CheckoutController", "Index");
//admin
//admin
$router->add("/" . URL_SUBFOLDER . "/Admin/Home", "admin", "HomeController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Admin/Home/Index", "admin", "HomeController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Admin/Category", "admin", "CategoryController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Admin/Category/Index", "admin", "CategoryController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Admin/Category/Upsert", "admin", "CategoryController", "Upsert", array('0' => '[0-9]'));
$router->add("/" . URL_SUBFOLDER . "/Admin/Category/UpsertPost", "admin", "CategoryController", "UpsertPost", array('0' => '[0-9]'));
$router->add("/" . URL_SUBFOLDER . "/Admin/Category/Delete", "admin", "CategoryController", "Delete", array('0' => '[0-9]'));

$router->add("/" . URL_SUBFOLDER . "/Admin/Product", "admin", "ProductController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Admin/Product/Index", "admin", "ProductController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Admin/Product/Upsert", "admin", "ProductController", "Upsert", array('0' => '[0-9]'));
$router->add("/" . URL_SUBFOLDER . "/Admin/Product/UpsertPost", "admin", "ProductController", "UpsertPost", array('0' => '[0-9]'));
$router->add("/" . URL_SUBFOLDER . "/Admin/Product/Delete", "admin", "ProductController", "Delete", array('0' => '[0-9]'));