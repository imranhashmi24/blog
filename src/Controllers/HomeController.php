<?php

namespace My\Blog\Controllers;



class HomeController {
    public function index(){
    return view("pages/master");
    
    }

    public function blog(){
        return view("backend/blog/index");
        
        }

        public function category(){
            return view("backend/category/index");
            
            }
        
    

    


    public function backend(){
        return view("backend/index");
    }
}
