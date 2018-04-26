<?php
include "../data base/conexion.php";
include_once '../model/modelProducto.php';
include_once '../model/modelOS.php';

class OT extends conexion {
public function agregar(){

  private $idOT=$_POST['idOT'];
  private $OTnombre=$_POST['OTnombre'];
  private OS $OS_idOS=$_POST['OS_idOS'];
  private Producto $Producto_idProducto=$_POST['idhistorial'];

  $SQL = "insert into mydb values('','".$idOT."','".$OTnombre."','".$OS_idOS."','".$Producto_idProducto."')";

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
    $idOT=$_POST['idOT'];
    $OTnombre=$_POST['OTnombre'];
    $OS_idOS=$_POST['OS_idOS'];
    $Producto_idProducto=$_POST['idhistorial'];

    $CONSULTA="update mydb set idOT='".$idOT."',OTnombre='".$OTnombre."',OS_idOS='".$OS_idOS."',Producto_idProducto='".$Producto_idProducto."' WHERE idOT='".$idOT."' ";

    $QUERY=mysql_query($CONSULTA);

  if($QUERY){
  echo "Se modificó correctamente los datos";
  }else{echo mysql_error(); }

  $this->_Destructor();

  }

  public function eliminar()
  {
    $idOT=$_POST['idOT'];
    $OTnombre=$_POST['OTnombre'];
    $OS_idOS=$_POST['OS_idOS'];
    $Producto_idProducto=$_POST['idhistorial'];

    $eliminar="delete from mydb WHERE idOT='".$idOT."' ";

    $Qeliminar=mysql_query($eliminar);

    if($Qeliminar){echo"Se eliminó correctamente"; }else{ echo mysql_error(); }

    $this->_Destructor();
  }
}
?>
