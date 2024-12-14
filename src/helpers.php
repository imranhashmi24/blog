<?php

function view ($path,$data=[]){
    extract($data);
    ob_start();
    include_once __DIR__ ."/../views/" .$path .".php" ;
    return ob_get_clean();
}

