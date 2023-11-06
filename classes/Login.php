<?php
/**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */

class Login extends DB
{
    //Method to check if the username exist
    protected function checkUser($username)
    {
        $stmt = parent::connect()->prepare("SELECT username FROM users WHERE username = :username");
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        if($stmt->rowCount() == 0)
        {
            return false;
        } else {
            return true;
        }
    }

    // Method to login the user
    protected function getUser($username, $password)
    {
        $stmt = parent::connect()->prepare('SELECT password FROM users WHERE username = :username');
        $stmt->bindParam(":username", $username);

        if(!$stmt->execute())
        {
            return false;
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            return false;
        }

        $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordHashed[0]['password']);

        if($checkPassword == false)
        {
            return false;
        } elseif ($checkPassword == true)
        {
            $stmt = parent::connect()->prepare('SELECT * FROM users WHERE username = :username');
            $stmt->bindParam(":username", $username);
            
            if(!$stmt->execute())
            {
                $stmt = null;
                return false;
                exit();
            }

            if($stmt->rowCount() == 0)
            {
                $stmt = null;
                return false;
                exit();
            }

            if($user = $stmt->fetchAll(PDO::FETCH_ASSOC))
            {
                session_start();
                $_SESSION['username'] = 'konakchiev';
                $_SESSION['id'] = $user[0]['id'];
                return true;
            }
            
        }
        $stmt = null;
    }
}