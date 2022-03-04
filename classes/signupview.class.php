<?php

include "signupcontr.class.php";

if (isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $password = md5($_POST['pass']);
    $conpass = md5($_POST['conpass']);

    $newUser = new SignupContr($_SESSION['name'], $_SESSION['email'], $phoneNumber, $gender, $password, $conpass);
    $newUser->authenticate();
}