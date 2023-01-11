<?php

namespace App\model;
use PDO;
use Exception;

class Conexion {
    
    
    private $hostname, $dbname, $username, $password, $dsn;   
    
    public function __construct(){
        
        
        // Database setup:
         $this->hostname = "localhost";
         $this->dbname = "CRUDO";
         
         //* permisos
         $this->username  = "root";
         $this->password = "";
         
         //* Crear un DSN (data source name)
         $this->dsn = "mysql:host=$this->hostname;dbname=$this->dbname";
        
    }
    

    /**
     * @method conectar
     * @return object
     */

    public function conectar(){
        try{
            $db = new PDO($this->dsn, $this->username, $this->password);
            return $db;
        }catch(Exception $e){
            echo $e->getMessage();
        }
      }


      public function getSession(){
        //crear una session
        return session_start();
      }

}
?>