<?php

class Signup extends Dbh
{

    protected function checkUser($username, $email)
    {
        $stmt = $this->connect()->prapare('SELECT username, email FROM users WHERE username = ? OR email = ?');

        if(!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        } 

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false
        } else {
            $resultCheck = true;
        }

        return $resultCheck;

    }

    protected function setUser($username, $password, $email)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (username, password, email) VALUES (?,?,?)');
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!stmt->execute(array($username, $hashedPwd, $email)))
        {
            $stmt = null;
            header('Location ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

}