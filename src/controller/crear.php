<?php

//* Llamar a la base de datos
include("../model/conexion.php");
$db = conectar();

//* capturar los datos enviados por el metodo HTTP POST del formulario con el $_POST
$nombre = $_POST['nombre'];  
$consulta = $_POST['consulta'];

//* Insertar los valores capturados en la base de datos
//! SQL query para insertar
$sql = "INSERT INTO problemas (nombre, consulta) VALUES (:nombre,:consulta)";
//! ejecutar la inserción en la base de datos
$query = $db->prepare($sql);

$query->execute(["nombre"=> $nombre, "consulta"=> $consulta]);

//* si se ha realizado la inserción con la base de datos, redirecciona a la página de index
if($query){

    //almacenar datos en session
    $_SESSION['mensaje'] = "Consulta guardada satisfactoriamente";
    $_SESSION['mensaje_type'] = "bg-teal-200 text-teal-600"; 
    $_SESSION['icon'] = '<svg aria-hidden="true" focusable="false" data-prefix="fas"
    data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img"
    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path fill="currentColor"
        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
    </path>
</svg>';
    
    Header("Location: ../view/citas.php");
}else{
    echo "ERROR al crear";
}

?>