<?php

if(!function_exists('load_css')) {
    function load_css($url) {
        return "<link rel='stylesheet' href='$url'>";
    }
}

if(!function_exists('load_js')) {
    function load_js($url) {
        return "<script src='$url'></script>";
    }
}

if(!function_exists('env')) {
    function env($key, $default = '') {
        return getenv($key) ?? $default;
    }
}

if(!function_exists('get_view')) {
    function get_view($layout, $view) {
        return APP_ROOT . "/area/$layout/views/$view.php";
    }
}

