<?php

use My\Blog\Base\Router;
use Pecee\SimpleRouter\SimpleRouter;
use My\Blog\Controllers\HomeController;
use My\Blog\Controllers\LoginController;

Router::group(['prefix' => BASE_DIR . 'admin'], function(){

    Router::get('/login', [LoginController::class, 'login']);
    Router::get('/register', [LoginController::class, 'register']);

    Router::get('/dashboard', [HomeController::class, 'backend']);
    Router::get('/blog', [HomeController::class, 'blog']);
    Router::get('/category', [HomeController::class, 'category']);

});

