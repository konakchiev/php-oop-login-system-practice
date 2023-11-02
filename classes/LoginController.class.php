<?php

class LoginController extends Login
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser()
    {
        if($this->emtpyInput() == false ) {
            header('Location: ../index.php?error=emptyinput');
            exit();
        }

        $this->getUser($this->username, $this->password);
    }

    private function emptyInput()
    {
        $result;
        if(!empty($this->username) || empty($this->password) )
        {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}