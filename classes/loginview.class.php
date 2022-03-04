<?php

session_start();
include "logincontr.class.php";

if (isset($_POST['submit'])) {
    $_SESSION['email'] = $_REQUEST['email'];
    $_SESSION['password'] = md5($_REQUEST['password']);
    $name = new DataBase();
    $_SESSION['name'] = $name->getName($_SESSION['email']);

    

    $loginInstance = new LoginContr($_SESSION['email'], $_SESSION['password']);
    echo $loginInstance->login();
    
}