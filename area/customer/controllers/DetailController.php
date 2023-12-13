<?php
class DetailController {
    function index($id,$query = null) {
        // print_r($id);
        // print_r($query);

        require_once APP_ROOT . "/area/customer/views/Detail/index.php";

    }
}