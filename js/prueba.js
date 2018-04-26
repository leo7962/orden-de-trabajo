// JavaScript Document
function grabar(){

	$('#procesar').val('1')

	var url		=' ./controlador/controlador.php',
		cadena	=$("#formulario").serialize();
	e_ajax(url,cadena);

}
function grabar2(){
 $( '#modificar'). val (   prompt('escriba el id del campo que desea modificar ',''));
	$('#procesar').val('2');
	   var url		=' ./controlador/controlador.php',
		cadena	=$("#formulario").serialize();

	e_ajax(url,cadena);
}
function grabar3(){
$( '#modificar'). val (   prompt('escriba el id del campo que desea eliminar ',''));

	$('#procesar').val('3');


	var url		=' ./controlador/controlador.php',
		cadena	=$("#formulario").serialize();
	e_ajax(url,cadena);

}

function e_ajax(url,cadena){
  $.ajax({
		async:true,
			type:"POST",
			dataType:"html",
			contentType: "application/x-www-form-urlencoded",

			beforeSend: function(){ $('#carga').html('<img src="./imagenes/loading.gif"" id="Preloader">'); },
			url:url,
			data:cadena,
			success: function(data){

				$('img#Preloader').css('display','none');
				$("#respuesta").fadeIn();
				$("#respuesta").addClass('result_ok');
				$("#respuesta").html(data).fadeOut(10000);
				$('#nombre').val('');
				$('#nombre').focus();
				$('#apellidos').val('');
				$('#apellidos').focus();

				return false;
					},
			error: function(){

			},
			timeout:4000
		});
}
