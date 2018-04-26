<?php
class Conexion{
 private $conexion="";
 public  $servidor="localhost";
 public  $user="root";
 private  $bd="mvc";

public function __Constructor(){

	 $this->conexion = mysql_connect($this->servidor, $this->user ) or die  ( "Sin conexión" ) ;

  $dbP= mysql_select_db( $this->bd,$this->conexion);

}
public   function _Destructor(){

mysql_close();

}
}
$conexion= new Conexion;
$conexion->__Constructor();
?>
