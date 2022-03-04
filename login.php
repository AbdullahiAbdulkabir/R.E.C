<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="classes/loginview.class.php" method="post">
    <?php
    $fullpath = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullpath, "login=empty")) {
        echo "Please fill in all fields";
    }
    elseif (strpos($fullpath, "login=invalid")) {
        echo "Incorrect username or password!";
    }
    ?>
        <h3>Login</h3>
        <label for="email">Email</label><br>
        <input type="text" name="email"><br>
        <br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <br>
        <input type="submit" value="Login" name="submit">
        <br>
        <p>Don't have an account? <a href="http://localhost/r.e.c/signup.php" style="color:indianred">Sign up</a></p>
    </form>
</body>
</html>