<?php

namespace My\Blog\Controllers;



class LoginController {

    


    public function login(){
        return view("login/index");
    }


    public function register(){
        return view("register/index");
    }
}
