<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class DB 
{

    protected function connect() {
        try {
            $dns = 'mysql:host=' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/dbname');
            $pdo = new PDO($dns,  Config::get('mysql/username'), Config::get('mysql/password'));
            
            return $pdo;
        } catch (PDOException $e) {
            die('Error!' . $e->getMessage());
        }
    }
}