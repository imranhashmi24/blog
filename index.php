<?php

require_once 'vendor/autoload.php';


define("ROOT", __DIR__);

//require_once 'views/Frontend/index.php';

define("BASE_DIR", "RawPHP/blog");
define('ASSET_DIR', __DIR__ . '/assets');


define('URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . BASE_DIR);
//URL = http://localhost/RawPHP/blog/

define('ASSET_URL', URL . '/assets');


require_once 'views/pages/master.php';
