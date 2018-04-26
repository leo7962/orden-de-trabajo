<?php
sleep(0.5);
include "../model/modelOS.php";
	$OS = new OS;
	$procesar = $_POST['procesar'];
if(isset($procesar)){
	if($procesar==1){
		$OS->agregar();
	}else if($procesar==0){
		echo " Seleccione una operación.";
	}else if($procesar==2){
		$OS->modificar();
	}else if($procesar==0){
		echo " No se seleccionó una operación.";
	} else if($procesar==3){
		$OS->eliminar();
	}else if($procesar==0){
	 echo" No se seleccionó una operación.";
	}
}
?>
