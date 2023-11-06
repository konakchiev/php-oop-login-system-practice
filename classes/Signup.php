<?php
/**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */


class Signup extends DB
{

    protected function checkUser($username, $email)
    {
        $stmt = parent::connect()->prepare('SELECT username, email FROM users WHERE username = :username OR email = :email');
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        
        if(!$stmt->execute())
        {
            return false;
        }

        if($stmt->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    
        $stmt = null;
    }

    protected function insertUser($username, $password, $email, $name)
    {
        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = parent::connect()->prepare("INSERT INTO users (username, password, email, name) VALUES (:username, :password, :email, :name)");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $passwordHashed);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":name", $name);

        if(!$stmt->execute())
        {
            return false;
        } else {
            return true;
        }
        $stmt = null;
    }
}