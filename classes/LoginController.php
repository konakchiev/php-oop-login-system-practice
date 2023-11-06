<?php
/**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */

class LoginController extends Login
{
    private $username;
    private $password;

    
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }


    //Method Login the user
    public function loginUser()
    {
        //Check for empty inputs
        if($this->emptyInput() == false)
        {
            $return = array(
                'status' => 'emptyinput'
            );

            return print_r(json_encode($return));
        }

        //Check if username exist
        if($this->checkUser($this->username) == false) {
            $return = array(
                'status' => 'usernotexist'
            );

            return print_r(json_encode($return));
        }


        //Login the user
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

    // Method to check for empty inputs
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