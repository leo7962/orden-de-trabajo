<?php
sleep(0.5);
include "../model/modelOT.php";
	$OT = new OT;
	$procesar = $_POST['procesar'];
if(isset($procesar)){
	if($procesar==1){
		$OT->agregar();
	}else if($procesar==0){
		echo " Seleccione una operación.";
	}else if($procesar==2){
		$OT->modificar();
	}else if($procesar==0){
		echo " No se seleccionó una operación.";
	} else if($procesar==3){
		$OT->eliminar();
	}else if($procesar==0){
	 echo" No se seleccionó una operación.";
	}
}
?>
