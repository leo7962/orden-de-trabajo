<?php

include "../data base/conexion.php";
include_once '../model/modelHistorial.php';


class Producto extends conexion {
public function agregar(){

	private $idProducto=$_POST['idProducto'];
	private $Productonombre=$_POST['Productonombre'];
	private $Productocodigo=$_POST['Productocodigo'];
	private historial $historial_idhistorial=$_POST['historial_idhistorial'];
	private $Productodescripcion=$_POST['Productodescripcion'];
$SQL = "insert into mydb values('','".$idProducto."','".$Productonombre."','".$Productocodigo."','".$historial_idhistorial."','".$Productodescripcion."')";

 $query= mysql_query($SQL);

	if($query){
		echo"se ha insertado correctamente los datos";
		} else{

		echo mysql_error() ;

		}

	 $this->_Destructor();

 }

public  function modificar(){


	$idProducto=$_POST['idProducto'];
	$Productonombre=$_POST['Productonombre'];
	$Productocodigo=$_POST['Productocodigo'];
	$historial_idhistorial=$_POST['historial_idhistorial'];
	$Productodescripcion=$_POST['Productodescripcion'];
    //$id=$_POST['modificar'];

 $CONSULTA=" update mydb set idProducto='".$idProducto."',Productonombre='".$Productonombre."',Productocodigo='".$Productocodigo."',historial_idhistorial='".$historial_idhistorial."',Productodescripcion='".$Productodescripcion."' WHERE idProducto='".$idProducto."' ";


  $QUERY=mysql_query($CONSULTA);

if($QUERY){
echo "Se modificó correctamente los datos";
}else{echo mysql_error(); }

$this->_Destructor();
}


public   function  eliminar(){
	$idProducto=$_POST['idProducto'];
	$Productonombre=$_POST['Productonombre'];
	$Productocodigo=$_POST['Productocodigo'];
	$historial_idhistorial=$_POST['historial_idhistorial'];
	$Productodescripcion=$_POST['Productodescripcion'];
    //$id=$_POST['modificar'];


$eliminar="  delete  from  mydb  where idProducto='".$idProducto."'  ";

$Qeliminar=mysql_query($eliminar);


if($Qeliminar){echo"Se eliminó correctamente"; }else{ echo mysql_error(); }

$this->_Destructor();

}

}
?>
