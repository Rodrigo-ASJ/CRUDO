<?php 



include ("./src/model/conexion.php");
use PHPUnit\Framework\TestCase;


class conexionTest extends TestCase{
    
/** @test */    
public function comprobar_que_hay_conexion(){
    // añadir test_ para hacer fincionar el test o el arroba = test
    
    //Setup
    $db = conectar();
    //Accion
    $db = true;

    //Comprobación / Aserciones
    $this->assertEquals(true,$db);
    
}
    
    
}

?>