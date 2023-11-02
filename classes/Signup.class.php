<?php

class Signup extends Dbh
{

    protected function checkUser($username, $email)
    {
        $stmt = $this->connect()->prepare('SELECT username, email FROM users WHERE username = ? OR email = ?');

        if(!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        } 

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;

    }

    protected function setUser($username, $password, $email, $name)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (username, password, email, name) VALUES (?,?,?,?)');
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $hashedPwd, $email, $name)))
        {
            $stmt = null;
            header('Location ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

}