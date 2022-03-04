<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <form action="classes/signupview.class.php" method="POST"">
    <?php
        $fullpath = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullpath, 'signup=empty') == true) {
            echo "<p class='error'>Please fill in all fields!</p>";
        }
        elseif (strpos($fullpath, 'signup=weakPassword') == true) {
            echo "<p class='error'>Your password should be at least 8 character long!</p>";
        }
        elseif (strpos($fullpath, 'signup=invalidEmail') == true) {
            echo "<p class='error'>Please input a valid email!</p>";
        }
        elseif (strpos($fullpath, 'signup=incorrectPhone') == true) {
            echo "<p class='error'>You've inputed an incorrect phone number!</p>";
        }
        elseif (strpos($fullpath, 'signup=emailTaken') == true) {
            echo "<p class='error'>Email already in use!</p>";
        }
        elseif (strpos($fullpath, 'signup=passwordMissMatch') == true) {
            echo "<p class='error'>Passwords don't match!</p>";
        }
        elseif (strpos($fullpath, 'signup=success') == true) {
            echo "Account created!" ?> <a href="http://localhost/r.e.c/login.php" style="color:indianred">login</a><?php
        }
        else {
            
        }
    ?>
        <h3>Sign Up</h3>
        <label for="name">Name</label><br>
        <input type="text" name="name"><br>
        <br>
        <label for="email">Email</label><br>
        <input type="text" name="email"><br>
        <br>
        <label for="phone_number">Phone number</label><br>
        <input type="text" name="phone_number"><br>
        <br>
        <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female<br>
        <br>
        <label for="pass">Password</label><br>
        <input type="password" name="pass"><br>
        <br>
        <label for="conpass">Confirm Password</label><br>
        <input type="password" name="conpass"><br>
        <br>
        <input type="submit" value="Sign up" name="submit">
        
        <p>Already have an account? <a href="http://localhost/r.e.c/login.php" style="color:indianred">Login</a></p>
    </form>
    
</body>
</html>