<?php

class Signup extends DB
{

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
            $return = array(
                'status' => 'failedstmt'
            );

            print_r(json_encode($return));
        }
    }
}