<?php

spl_autoload_register("loader");

function loader($class) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'classes') === true) {
        $path = "classes/";
    }
    elseif (strpos($url, 'classes') === true) {
        # code...
    }
    else {
        $path = "../classes/";
    }

    $extension = ".class.php";

    include $path . $class . $extension;
}