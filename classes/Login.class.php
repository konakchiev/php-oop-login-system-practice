<?php

class Login extends Dbh
{
    protected function getUser($username, $password)
    {
        $stmt = $this->connect()->prapare('SELECT password FROM users WHERE username = ? OR email = ?');

        if(!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header('Location: ../index.php?error=stmtfailed');
            exit();
        } 

        if($stmt->rowCount() == 0 )
        {
            $stmt = null;
            header('Location: ../index.php?error=usernotfound');
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $pwdHashed[0]['password']);
        if($checkPassword == false) {
            $stmt = null;
            header('Location: ../index.php?error=wrongpasswod');
            exit();
        } else if ($checkPassword == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND password = ?');

            if($stmt->execute(array($username, $password, $email))) {
                $stmt = null;
                header('Location ../index.php?error=stmtfailed');
                exit();
            } 

            if($stmt->rowCount() == 0)
            {   
                $stmt = null;
                header('Location ../index.php?error=stmtfailed');
                exit(); 
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['username'] = $user[0]['username'];
            $_SESSION['id'] = $user[0]['id'];
        }
        $stmt = null;
    }
}