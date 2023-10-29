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

}