<?php
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

    $db = new PDO($dsn, $username, $password);
    
 /* metodo con MySQLi   
    // conectar con el servidor
    $con = mysqli_connect($hostname,$username,$password);
    
    // ingresar en la base de datos
    mysqli_select_db($con,$dbname); 
*/

    return $db;
       
}



?>