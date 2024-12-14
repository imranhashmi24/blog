<?php


use My\Blog\Base\Router;
use My\Blog\Controllers\HomeController;

Router::group(['prefix' => BASE_DIR], function(){
    Router::get('/', [HomeController::class, 'index']);
});








