<?php

//i didn't later use this because it was giving me issues

spl_autoload_register("loader");

function loader($class) {
    // $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    
    $path = "../classes/";
    
    $extension = ".class.php";

    include $path . $class . $extension;
}