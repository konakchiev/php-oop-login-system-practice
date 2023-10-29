<?php

class SignupController
{

    private $name;
    private $email;
    private $password;
    private $passwordRepeat;
    private $username;

    public function __construct($name, $username, $email, $password, $passwordRepeat)
    {

        $this->name = $name;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;

    }


    //1. Check inputs for empty values
    private function emptyInput()
    {

        $result;
        if(empty($this->name) || empty($this->username) || empty($this->email) || empty($this->password) || empty($this->passwordRepeat))
        {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
 
    }


    //2. Check username input
    private function invalidUsername() 
    {

        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/"), $this->username) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;

    }


    //3. Check for invalid email
    private function invalidEmail()
    {

        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    
    }

    //4. Check password is the same as password repeat
    private function checkPassword()
    {
        $result;

        if($this->password !== $this->passwordRepeat) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;

    }

}