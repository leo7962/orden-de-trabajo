<?php
sleep(0.5);
include "../model/modelHistorial.php";
	$historial = new historial;
	$procesar = $_POST['procesar'];
if(isset($procesar)){
	if($procesar==1){
		$historial->agregar();
	}else if($procesar==0){
		echo " Seleccione una operación.";
	}else if($procesar==2){
		$historial->modificar();
	}else if($procesar==0){
		echo " No se seleccionó una operación.";
	} else if($procesar==3){
		$historial->eliminar();
	}else if($procesar==0){
	 echo" No se seleccionó una operación.";
	}
}
?>
