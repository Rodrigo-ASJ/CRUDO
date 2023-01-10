<?php

namespace App;
use PDO;
use Exception;

//crear una session
session_start();

function conectar(){

   // Database setup:
    $hostname = "localhost";
    $dbname = "CRUDO";
    
    //* permisos
    $username  = "root";
    $password = "";
    
    //* Crear un DSN (data source name)
    $dsn = "mysql:host=$hostname;dbname=$dbname";

    try{
        $db = new PDO($dsn, $username, $password);
        return $db;
    }catch(Exception $e){
        echo $e->getMessage();
    }
    
    
 /* metodo con MySQLi   
    // conectar con el servidor
    $con = mysqli_connect($hostname,$username,$password);
    
    // ingresar en la base de datos
    mysqli_select_db($con,$dbname); 
*/

 
       
}



?>