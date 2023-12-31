<?php
/**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */


class SignupController extends Signup
{
    private $username;
    private $password;
    private $email;
    private $name;
    private $repeatPassword;

    public function __construct($username, $password, $email, $name, $repeatPassword)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
        $this->repeatPassword = $repeatPassword;
    }

    private function emptyInput()
    {
    
        if(empty($this->username) || empty($this->password) || empty($this->email) || empty($this->name) || empty($this->repeatPassword))
        {
            return false;   
        } else {
            return true;
        }
    }


    private function valideteUsername()
    {
        if(!preg_match('/^[a-zA-Z0-9]*$/', $this->username))
        {
            return false;
        } else {
            return true;
        }
    }


    private function validateEmail()
    {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            return false;
        } else {
            return true;
        }
    }

    private function passwordCheck()
    {
        if($this->password !== $this->repeatPassword)
        {
            return false;
        } else {
            return true;
        }
    }


    public function signupUser()
    {
        if($this->emptyInput() == false) {
            $return = array(
                'status' => 'emptyinput'
            );

            return print_r(json_encode($return));
            exit();
        }

        if($this->validateEmail() == false)
        {
            $return = array(
                'status' => 'notvalidemail'
            );

            return print_r(json_encode($return));
            exit();
        }

        if($this->valideteUsername() == false) 
        {
            $return = array(
                'status' => 'usernamenotvalid'
            );

            return print_r(json_encode($return));
            exit();
        }

        if($this->passwordCheck() == false)
        {
            $return = array(
                'status' => 'passwordnotmatch'
            );

            return print_r(json_encode($return));
            exit();
        }

        if($this->checkUser($this->username, $this->email) == false)
        {
            $return = array(
                'status' => 'userexists'
            );

            print_r(json_encode($return));
            exit();
        }

        if($this->insertUser($this->username, $this->password, $this->email, $this->name) == false)
        {
            $return = array(
                'status' => 'failedstmt'
            );

            print_r(json_encode($return));
        } else {
            $return = array(
                'status' => 'success'
            );

            print_r(json_encode($return));
        }
    }


}