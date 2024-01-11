<?php
$router = Router::get_router();
$router->add("/" , "customer", "HomeController", "Index");
// $router->add("/" . URL_SUBFOLDER . "/Detail/", "customer", "DetailController", "Index", array('id' => '[0-9]+'));
// $router->add("/" . URL_SUBFOLDER . "/Detail?", "customer", "DetailController", "Index", array('id' => '[0-9]+'));
$router->add("/" . "Customer/Product", "customer", "ProductController", "Index", array('id' => '[0-9]', "brand"));
$router->add("/" . "Customer/Product/Index", "customer", "ProductController", "Index", array('0' => '[0-9]'));
$router->add("/" . "Customer/Product/Detail", "customer", "ProductController", "Detail", array('0' => '[0-9]'));
$router->add("/" . "Customer/Cart/Index", "customer", "CartController", "Index");
$router->add("/" . "Customer/Checkout/Index", "customer", "CheckoutController", "Index");
$router->add("/" . "Customer/Cart", "customer", "CartController", "Index");
$router->add("/" . "Customer/Cart/Create", "customer", "CartController", "Create");
$router->add("/" . "Customer/Cart/Delete", "customer", "CartController", "Delete", array('id' => '[0-9]'));
$router->add("/" . "Customer/Checkout", "customer", "CheckoutController", "Index");
$router->add("/" . "Customer/Account/Login", "customer", "AccountController", "Login");
$router->add("/" . "Customer/Account/LoginPost", "customer", "AccountController", "LoginPost");
$router->add("/" . "Customer/Account/Logout", "customer", "AccountController", "Logout");

//admin
//admin
$router->add("/" . "Admin/Home", "admin", "HomeController", "Index");
$router->add("/" . "Admin/Home/Index", "admin", "HomeController", "Index");
$router->add("/" . "Admin/Category", "admin", "CategoryController", "Index");
$router->add("/" . "Admin/Category/Index", "admin", "CategoryController", "Index");
$router->add("/" . "Admin/Category/Upsert", "admin", "CategoryController", "Upsert", array('0' => '[0-9]'));
$router->add("/" . "Admin/Category/UpsertPost", "admin", "CategoryController", "UpsertPost", array('0' => '[0-9]'));
$router->add("/" . "Admin/Category/Delete", "admin", "CategoryController", "Delete", array('0' => '[0-9]'));
$router->add("/" . "Admin/Category/GetAll", "admin", "CategoryController", "GetAll");

$router->add("/" . "Admin/Product", "admin", "ProductController", "Index");
$router->add("/" . "Admin/Product/Index", "admin", "ProductController", "Index");
$router->add("/" . "Admin/Product/Upsert", "admin", "ProductController", "Upsert", array('0' => '[0-9]'));
$router->add("/" . "Admin/Product/UpsertPost", "admin", "ProductController", "UpsertPost", array('0' => '[0-9]'));
$router->add("/" . "Admin/Product/Delete", "admin", "ProductController", "Delete", array('0' => '[0-9]'));

$router->add("/" . "Admin/User", "admin", "UserController", "Index");
$router->add("/" . "Admin/User/Index", "admin", "UserController", "Index");
$router->add("/" . "Admin/User/Create", "admin", "UserController", "Create");
$router->add("/" . "Admin/User/CreatePost", "admin", "UserController", "CreatePost");
$router->add("/" . "Admin/User/Update", "admin", "UserController", "Update", array('0' => '[0-9]'));
$router->add("/" . "Admin/User/UpdatePost", "admin", "UserController", "UpdatePost", array('0' => '[0-9]'));
$router->add("/" . "Admin/User/Delete", "admin", "UserController", "Delete", array('0' => '[0-9]'));

$router->add("/" . "Admin/Order", "admin", "OrderController", "Index");
$router->add("/" . "Admin/Payment", "admin", "PaymentController", "Index");

$router->add("/" . "Admin/Account/Login", "admin", "AccountController", "Login");
$router->add("/" . "Admin/Account/LoginPost", "admin", "AccountController", "LoginPost");
$router->add("/" . "Admin/Account/Logout", "admin", "AccountController", "Logout");

