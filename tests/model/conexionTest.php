<?php 

namespace Tests\model;

use App\model\conexion;
use PHPUnit\Framework\TestCase;


class conexionTest extends TestCase{
    
/** @test */    
public function comprobar_que_hay_conexion(){
    // añadir test_ para hacer fincionar el test o el arroba = test
    
    //Setup
    $db = new Conexion();
    //Accion
    // sut = system under test
    $sut = $db->conectar();

    //Comprobación / Aserciones
    $this->assertEquals(false,is_object($sut)); 

  
}
    
    
}


?>