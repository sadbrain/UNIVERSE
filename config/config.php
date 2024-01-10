<?php

define('DEBUG_MODE', env('DEBUG_MODE', true));

//site name
define('SITE_NAME', env('SITE_NAME', 'Universe'));
define('START_DATE', env('START_DATE', '2023-01-10 00:00:00' ));

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '');

//DB Params
define('DB_HOST', env('DB_HOST', 'localhost'));
define('DB_USER', env('DB_USER', 'root'));
define('DB_PASS', env('DB_PASS', ''));
define('DB_NAME', env('DB_NAME', 'UNIVERSE'));
