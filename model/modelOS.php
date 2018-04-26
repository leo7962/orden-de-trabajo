<?php

include "../data base/conexion.php";


class OS extends conexion {
public function agregar(){

	private $idOS=$_POST['idOS'];
	private $OSnombre=$_POST['OSnombre'];

	$SQL = "insert into mydb values('','".$idOS."','".$OSnombre."')";

	$query= mysql_query($SQL);

 	if($query){
 		echo"se ha insertado correctamente los datos";
 		} else{
 		echo mysql_error() ;
 		}
 	 $this->_Destructor();
  }

	public function modificar()
	{
		$idOS=$_POST['idOS'];
		$OSnombre=$_POST['OSnombre'];

		$CONSULTA="update mydb set idOS='".$idOS."',OSnombre='".$OSnombre."' WHERE idOS='".$idOS."' ";

		$QUERY=mysql_query($CONSULTA);

	if($QUERY){
	echo "Se modificó correctamente los datos";
	}else{echo mysql_error(); }

	$this->_Destructor();

	}

	public function eliminar()
	{
		$idOS=$_POST['idOS'];
		$OSnombre=$_POST['OSnombre'];

		$eliminar="delete from mydb WHERE idOS='".$idOS."' ";

		$Qeliminar=mysql_query($eliminar);

		if($Qeliminar){echo"Se eliminó correctamente"; }else{ echo mysql_error(); }

		$this->_Destructor();
	}
}
?>
