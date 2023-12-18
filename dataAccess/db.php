<?php

//a db class for connecting to the database
  class Db {
    private static $instance = NULL;

    public static function get_db() {
      if (!isset(self::$instance)) {
            try{
                $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
                self::$instance = new PDO($dsn, DB_USER, DB_PASS);      
                
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
              } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
      return self::$instance;
    }
  }

?>