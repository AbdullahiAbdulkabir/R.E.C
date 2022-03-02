<?php
// session_start();

include "../includes/loader.inc.php";

class LoginContr extends DataBase {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function login() {
        if (empty($this->email) or empty($this->password)) {
            header("location: ../login.php?login=empty");
            exit();
        }
        elseif ($this->checkUser($this->email, md5($this->password)) > 0) {
            header("location: ../selection.php");
            exit();
        }
        else {
            header("location: ../login.php?login=invalid");
            exit();
        }
    }
}