<?php
sleep(0.5);
include "../model/modelProducto.php";
	$Producto = new Producto;
	$procesar = $_POST['procesar'];
if(isset($procesar)){
	if($procesar==1){
		$Producto->agregar();
	}else if($procesar==0){
		echo " Seleccione una operación.";
	}else if($procesar==2){
		$Producto->modificar();
	}else if($procesar==0){
		echo " No se seleccionó una operación.";
	} else if($procesar==3){
		$Producto->eliminar();
	}else if($procesar==0){
	 echo" No se seleccionó una operación.";
	}
}
?>
