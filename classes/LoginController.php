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
        if($this->emptyInput() == false)
        {
            $return = array(
                'status' => 'emptyinput'
            );

            return print_r(json_encode($return));
        }

        if($this->checkUser($this->username) == false) {
            $return = array(
                'status' => 'usernotexist'
            );

            return print_r(json_encode($return));
        }

        if($this->getUser($this->username, $this->password) == true)
        {
            $return = array(
                'status' => 'success'
            );

            return print_r(json_encode($return));
            
        } else {
            $return = array(
                'status' => 'wrong'
            );

            return print_r(json_encode($return));
        }
        
    }

    private function emptyInput()
    {
        if(empty($this->username) || empty($this->password))
        {
        
            return false;
            exit();
        } else {
            return true;
        }
    }
}