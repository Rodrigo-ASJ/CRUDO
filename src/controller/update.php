<?php
namespace App;

include("../model/conexion.php");
$db= conectar();

//* mapear las columnas de un registro y rellenar las variables con los enviado por el formulario de editar.php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$consulta = $_POST['consulta'];


//* editar un registro con la información enviada por el metodo POST de HTTP
//! Query SQL para update un regustro que coincida con la primary key Cod_estudiante
$sql = "UPDATE problemas SET nombre=:nombre, consulta=:consulta WHERE id = :id";

//! ejecutar la query
$query = $db->prepare($sql);
$query->execute(["nombre"=> $nombre, "consulta"=> $consulta, "id"=> $id]);

//* si la query se ha ejecutado correctamente redirecciona a index
if($query){
$_SESSION['mensaje'] = "Tarea actualizada satisfactoriamente";
$_SESSION['mensaje_type'] = "bg-blue-500 text-blue-100";
$_SESSION['icon'] = '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" class="text-blue-200 w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
<path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
</svg>';
    
    Header("Location: ../view/index.php");
}else{
    echo "Error en Update";
}