<?php

include "database.class.php";


class SignupContr extends DataBase {
    private $name;
    private $email;
    private $phoneNumber;
    private $gender;
    private $password;
    private $conpass;

    public function __construct($name, $email, $phoneNumber, $gender, $password, $conpass) {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->gender = $gender;
        $this->password = $password;
        $this->conpass = $conpass;
    }

    public function authenticate() {
        if (empty($this->name) or empty($this->email) or empty($this->phoneNumber) or empty($this->gender) or empty($this->password) or empty($this->conpass)) {
            // echo "Please you have to fill all fields!";
            header("location: ../signup.php?signup=empty");
            exit();
        }
        elseif (strlen($this->password) < 8) {
            // echo "password must be at least 8 characters long"; 
            header("location: ../signup.php?signup=weakPassword");
            exit();
        }
        elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            // echo "Invalid email address";
            header("location: ../signup.php?signup=invalidEmail");
            exit();
        }
        elseif ($this->createdUser($this->email) > 0) {
            // echo "Username already exists";
            header("location: ../signup.php?signup=emailTaken");
            exit();
        }
        elseif (strlen($this->phoneNumber) !== 11) {
            // echo "Username already exists";
            header("location: ../signup.php?signup=incorrectPhone");
            exit();
        }
        elseif ($this->password !== $this->conpass) {
            // echo "Passwords don't match";
            header("location: ../signup.php?signup=passwordMissMatch");
            exit();
        }
        else {
            $this->createUser($this->name, $this->email, $this->phoneNumber, $this->gender, md5($this->password));
            $this->addEmail_Jamah($this->email);
            $this->addEmail_AdhkarSalat($this->email);
            $this->addEmail_Rawatib($this->email);
            $this->addEmail_Quran($this->email);
            $this->addEmail_Wird($this->email);
            $this->addEmail_AdhkarMornEve($this->email);
            $this->addEmail_Daily($this->email);
            // echo "Account created" . "<br>";
            header("location: ../selection.php");
            exit();
        }
    }
}