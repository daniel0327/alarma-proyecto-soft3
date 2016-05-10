<?php
require_once('CRUD_DB.php');
class CRUDTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }
  public function testCrudIsValid()
  {
    // prueba para asegurarse de que el objeto de un fsockopen es válido 
    $connObj = new CRUD_DB();
    $this->assertTrue($connObj->crearDerechodePeticion() == "derechos de peticion creados");
    $this->assertTrue($connObj->crearTutela() == "tutelas creadas");
    $this->assertTrue($connObj->crearUsuario() == "usuario creado");
    $this->assertTrue($connObj->eliminarDerechodePeticion() == "derecho de peticion eliminado");
    $this->assertTrue($connObj->eliminarTutela() == "tutela eliminada");
    $this->assertTrue($connObj->eliminarUsuario() == "usuario eliminado");
    $this->assertTrue($connObj->actualizarDerechodePeticion() == "derecho de peticion actualizado");
    $this->assertTrue($connObj->actualizarTutela() == "tutela actualizada");
    $this->assertTrue($connObj->enviarCorreoPeticion() == "test mensaje derecho de peticion");
    $this->assertTrue($connObj->enviarCorreoTutela() == "test mensaje tutela");
    $this->assertTrue($connObj->notificarUsuario() == "usuario notificado");

  }
}
?>