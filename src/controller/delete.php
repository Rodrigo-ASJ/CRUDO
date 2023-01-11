<?php 
namespace App\controller;
use App\model\conexion;
include("../model/conexion.php");
$con = new Conexion;
$con->getSession();
$db = $con->conectar();

//* capturar el valor enviado por la URL desde el achor con la query id
$id = $_GET['id'];
//* Eliminar un registro de la base de datos
//! SQL query para eliminar un registro que coincida la primary key con la variable 
$sql = "DELETE FROM problemas WHERE id = :id";
//! ejecutar la query
$DeleteQuery = $db->prepare($sql);

$DeleteQuery->execute(["id" => $id]);

//* redireccionar a la página de index si se ha podido enviar la query

if($DeleteQuery){
    $_SESSION['mensaje'] = "Consulta eliminada satisfactoriamente";
    $_SESSION['mensaje_type'] = "bg-yellow-300 text-yellow-700";
    $_SESSION['icon'] = '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-triangle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
    <path fill="currentColor" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"></path>
  </svg>';
    Header("Location: ../view/index.php");
}else{
    echo "Error: no se ha podido eliminar";
}

?>