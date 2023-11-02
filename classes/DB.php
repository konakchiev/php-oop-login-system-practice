<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
class DB 
{
    private static $_instance = null;
    private $_pdo, 
            $_query, 
            $_error = false, 
            $_resutls, 
            $_count = 0;
    
    public function __construct() {
        try {
            $this->_pdo = new PDO('mysql:host' . Config::get('mysql/host') . ';dbname=' . Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
        } catch (PDOException $e) {
            echo 'Error!' . $e->getMessage();
            die();
        }
    }  
    
    public static function getInstance()
    {
        if(!isset(self::$_instance)) {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }


    public function query($sql, $params = array()) 
    {
        $this->_error = false;
        if($this->_query = $this->_pdo->prepare($sql)) {
            if(count($params)) {
                $x = 1;
                foreach($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            }

            if($this->_query->execute()) {
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
            } else {
                $this->_error = true;
            }
        }

        return $this;
    }

    public function error()
    {
        return $this->_error;
    }
    
}