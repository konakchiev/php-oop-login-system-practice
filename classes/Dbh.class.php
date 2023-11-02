<?php

class Dbh
{
    private $username = 'root';
    private $password = '';
    private $host = 'localhost';
    private $dbName = 'phpooplogin';

    protected function connect()
    {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=phpooplogin', $this->username, $this->password);
            return $dbh;
        } catch (PDOException $e) {
            echo 'Error! ' . $e->getMessage() . '<br>';
        }
    }

}