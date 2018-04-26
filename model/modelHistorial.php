<?php
include "../data base/conexion.php";

class historial extends conexion {
public function agregar(){

  private $idhistorial=$_POST['idhistorial'];
  private $seguimiento=$_POST['seguimiento'];

  $SQL = "insert into mydb values('','".$idhistorial."','".$seguimiento."')";

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
    $idhistorial=$_POST['idhistorial'];
    $seguimiento=$_POST['seguimiento'];

    $CONSULTA="update mydb set idhistorial='".$idhistorial."',seguimiento='".$seguimiento."' WHERE idhistorial='".$idhistorial."' ";

    $QUERY=mysql_query($CONSULTA);

  if($QUERY){
  echo "Se modificó correctamente los datos";
  }else{echo mysql_error(); }

  $this->_Destructor();

  }

  public function eliminar()
  {
    $idhistorial=$_POST['idhistorial'];
    $seguimiento=$_POST['seguimiento'];

    $eliminar="delete from mydb WHERE idhistorial='".$idhistorial."' ";

    $Qeliminar=mysql_query($eliminar);

    if($Qeliminar){echo"Se eliminó correctamente"; }else{ echo mysql_error(); }

    $this->_Destructor();
  }
}
?>
