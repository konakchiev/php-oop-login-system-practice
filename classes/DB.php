<?php
/**
 * 
 *  Created by Iliyan Konakchiev
 *  PHP OOP With AJAX Login/Register System
 *  This project is for practice purpose only.
 * 
 */


class DB 
{


    //Initiate DB connection
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