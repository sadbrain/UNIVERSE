<?php
require_once "app/app.php";;
$app = new App();
$app -> use_router();
$app -> use_database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
$app -> run();
