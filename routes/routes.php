<?php
$router = Router::get_router();
$router->add("/" . URL_SUBFOLDER . "/Home", "customer", "HomeController", "Index");
$router->add("/" . URL_SUBFOLDER . "/", "customer", "HomeController", "Index");
$router->add("/" . URL_SUBFOLDER . "/Detail/", "customer", "DetailController", "Index", array('id' => '[0-9]+'));
$router->add("/" . URL_SUBFOLDER . "/Detail?", "customer", "DetailController", "Index", array('id' => '[0-9]+'));
