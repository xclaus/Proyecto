/**
 * @file
 * core.js
 *
 * Feedback demo
 *
 * LICENSE
 *
 * Este archivo esta sujeto a la nueva version de licencia BSD
 * que se incluye en un archivo .txt
 * De caso contrario tambien esta disponible en la siguiente URL:
 * http://code.google.com/p/apns-php/wiki/License
 * Si ud no recibio una copia y no tiene acceso a la red
 * por favor envie un correo a la direccion de autor, 
 * este sera inmediatamente respondido
 *
 * @author (C) 2014 Carlos Mella (cmelladiaz@gmail.com)
 * @version v1.0
 */


/************************************************************************
 *
 * Validara la ficha de resilencia 
 *
 ***********************************************************************/

function valida(){
	var documento = document.resilencia;
	
	var array = ['uno','dos'];
	
	var check = false;
	
	//recorro cada una de las filas.
	for (i=0; i<=6; i++) {
		//valido el flag
		if(documento.uno[i].checked){
			check = true;
		}
			//Valido que alguna opcion haya sido escogida
			if(!check){
				console.log('Debe seleccionar una opcion');
			}
	}
}


//Buscador de individuo mediante rut
	$('#bsc-rut').submit(function(){
		//alert('hola');
		//alert($('#busca-rut').val());
		$.ajax({
		      url: "php/peticiones.php?doc=rut",
		      type: 'GET',
		      data: {
		        rut: $('#busca-rut').val(),
		      }
		  }).done(
		    function(resp)
		    {
		     if(resp !=""){		     	
		     	//redirecciono al detalle del individuo
		     	window.location = 'datos.php?rut='+resp;
		     	}

		      
		    }
		  );
		return false; //se debe anular el envio del formulario de caso contrario no se ejecuta el evento en ajax
	
});	
 /**
  * metodo que inserta datos en bene usuarios
  */	
$('#bene_educacion').click(function(){
	//alert('Hola seba');
	//ruta de insersion
	$.ajax({
	      url: "ingresa.php?doc=caracterizacion",
	      type: 'GET',
	      data: {
	        curso: $('#curso').val(),
	        establecimiento: $('#establecimiento').val(),
	        cursos: $('#cursos').val(),
	        capacitacion: $('#capacitacion').val(),
	        c_padre: $('#c_padre').val(),
	        c_madre: $('#c_madre').val(),
	        espectativas: $('#espectativas').val(),
	        
	      }
	  }).done(
	    function(resp)
	    {
	     if(resp == "insertado"){		     	
	     	//Inserto los datos del usuario.
	    	 $("#msg").html('');
	    	 $("#form_bene_educacion").hide('slow');
	    	 $("#msg").append('<div class="alert alert-success"><i class="fa fa-check-square"> Datos guardados Correctamente</i>');
	     	
	     	}
	     if(resp == "fallo"){
	    	 $("#msg").html('');
	    	 $("#msg").append('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Fallo al insertar datos</div>');
	   		return false;
	    	 
	     }

	      
	    }
	  );
	
	
	//Anulo el envio de Post.
	return false;	
});	
	
	

//Competencias Parentales
$('#siguiente').click(function(){
	var uno    = $("input[name='1']").is(":checked");
	var dos    = $("input[name='2']").is(":checked"); 
	var tres   = $("input[name='3']").is(":checked");
	var cuatro = $("input[name='4']").is(":checked");
	var cinco  = $("input[name='5']").is(":checked");
	var seis   = $("input[name='6']").is(":checked");
	var siete  = $("input[name='7']").is(":checked");
	var ocho   = $("input[name='8']").is(":checked");
	var nueve  = $("input[name='9']").is(":checked");
	var diez   = $("input[name='10']").is(":checked");
	var once   = $("input[name='11']").is(":checked");
	var doce   = $("input[name='12']").is(":checked");
	
	if(uno && dos && tres && cuatro && cinco && seis && siete && ocho && nueve && diez && once && doce){
		$("#msg").html('');
		$('#capacidades_parentales').hide('slow');
		$('#habilidades_parentales').show('slow');
	}
	else{
		$(".alert-danger").remove();
		$("#msg").append('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Debe seleccionar todas las opciones antes de continuar</div>');
  		return false;
	}
});

$('#atras').click(function(event) {
	$('#capacidades_parentales').show('slow');
	$('#habilidades_parentales').hide('slow');
	
});

$('#terminar').click(function(event){
	/*
	Valido que todos los radios esten seleccionados
	Queda pendiente la captura de los textareas.
	 */
	var trece        = $("input[name='13']").is(":checked");
	var catorce      = $("input[name='14']").is(":checked");
	var quince       = $("input[name='15']").is(":checked");
	var diezseis     = $("input[name='16']").is(":checked");
	var diezsiete    = $("input[name='17']").is(":checked");
	var diezocho     = $("input[name='18']").is(":checked");
	var dieznueve    = $("input[name='19']").is(":checked");
	var veinte       = $("input[name='20']").is(":checked");
	var veinteuno    = $("input[name='21']").is(":checked");
	var veintedos    = $("input[name='22']").is(":checked");
	var veintetres   = $("input[name='23']").is(":checked");
	var veintecuatro = $("input[name='24']").is(":checked");
	var veintecinco  = $("input[name='25']").is(":checked");
	var veinteseis   = $("input[name='26']").is(":checked");
	var veintesiete  = $("input[name='27']").is(":checked");
	var veinteocho   = $("input[name='28']").is(":checked");

	if(trece && catorce && quince && diezseis && diezsiete && diezocho && dieznueve && veinte && veinteuno && veintedos
		&& veintetres && veintecuatro && veintecinco && veinteseis && veintesiete && veinteocho){
		
		$("#msg").html('');
		var opcion   = $("input[name='1']:checked").val();
		var opcion2  =  $("input[name='2']:checked").val();
		var opcion3  =  $("input[name='3']:checked").val();
		var opcion4  =  $("input[name='4']:checked").val();
		var opcion5  =  $("input[name='5']:checked").val();
		var opcion6  =  $("input[name='6']:checked").val();
		var opcion7  =  $("input[name='7']:checked").val();
		var opcion8  =  $("input[name='8']:checked").val();
		var opcion9  =  $("input[name='9']:checked").val();
		var opcion10 =  $("input[name='10']:checked").val();
		var opcion11 =  $("input[name='11']:checked").val();
		var opcion12 =  $("input[name='12']:checked").val();
		var opcion13 =  $("input[name='13']:checked").val();
		var opcion14 =  $("input[name='14']:checked").val();
		var opcion15 =  $("input[name='15']:checked").val();
		var opcion16 =  $("input[name='16']:checked").val();
		var opcion17 =  $("input[name='17']:checked").val();
		var opcion18 =  $("input[name='18']:checked").val();
		var opcion19 =  $("input[name='19']:checked").val();
		var opcion20 =  $("input[name='20']:checked").val();
		var opcion21 =  $("input[name='21']:checked").val();
		var opcion22 =  $("input[name='22']:checked").val();
		var opcion23 =  $("input[name='23']:checked").val();
		var opcion24 =  $("input[name='24']:checked").val();
		var opcion25 =  $("input[name='25']:checked").val();
		var opcion26 =  $("input[name='26']:checked").val();
		var opcion27 =  $("input[name='27']:checked").val();
		var opcion28 =  $("input[name='28']:checked").val();
		
		//sumo las variable y las parceo
		//Capacidades Parentales
		var apego         = ((parseFloat(opcion) + parseFloat(opcion2) + parseFloat(opcion3))*100)/3;
		var empatia       = ((parseFloat(opcion4) + parseFloat(opcion5) + parseFloat(opcion6))*100)/3;
		var crianza       = ((parseFloat(opcion7) + parseFloat(opcion8) + parseFloat(opcion9))*100)/3;
		var participacion = ((parseFloat(opcion10) + parseFloat(opcion11) + parseFloat(opcion12))*100)/3;

		//Habilidades Parentales
		var nutriente 	= ((parseFloat(opcion13) + parseFloat(opcion14) + parseFloat(opcion15) + parseFloat(opcion16))*100)/4;
		var social 		= ((parseFloat(opcion17) + parseFloat(opcion18) + parseFloat(opcion19) + parseFloat(opcion20))*100)/4;
		var educativa 	= ((parseFloat(opcion21) + parseFloat(opcion22) + parseFloat(opcion23) + parseFloat(opcion24) 
						+ parseFloat(opcion25) + parseFloat(opcion26)+ parseFloat(opcion27) + parseFloat(opcion28))*100)/8;

		$("#msg").html('');
		$('#habilidades_parentales').hide('slow');

		if(apego >= 66){
			$("#msg").append('<div class="alert alert-success"><i class="fa fa-check-square"></i><b> Apego Adecuado. Total: </b>'+Math.floor(apego)+'%</div>');
		}
		else{
			$("#msg").append('<div class="alert alert-danger"><i class="fa fa-check-square"></i><b> Apego no adecuada. Total: </b>'+Math.floor(apego)+'%</div>');
		}
		
		if(empatia >= 66){
			$("#msg").append('<div class="alert alert-success"><i class="fa fa-check-square"></i><b> Empatia Adecuada. Total: </b>'+Math.floor(empatia)+'%</div>');
		}
		else{
			$("#msg").append('<div class="alert alert-danger"><i class="fa fa-check-square"></i><b> Empatia no adecuada. Total: </b>'+Math.floor(empatia)+'%</div>');
		}
		
		if(crianza >= 66){
			$("#msg").append('<div class="alert alert-success"><i class="fa fa-check-square"></i><b> Crianza Adecuada. Total: </b>'+Math.floor(crianza)+'%</div>');
		}
		else{
			$("#msg").append('<div class="alert alert-danger"><i class="fa fa-check-square"></i><b> Apego no adecuada. Total: </b>'+Math.floor(crianza)+'%</div>');
		}
		
		if(participacion >=66){
			$("#msg").append('<div class="alert alert-success"><i class="fa fa-check-square"></i><b> Participacion Adecuada. Total: </b>'+Math.floor(participacion)+'%</div>');
		}
		else{
			$("#msg").append('<div class="alert alert-danger"><i class="fa fa-check-square"></i><b> Participacion no adecuada. Total: </b>'+Math.floor(participacion)+'%</div>');
		}

		if(nutriente){
			$("#msg").append('<div class="alert alert-success"><i class="fa fa-check-square"></i><b> Nutriente Adecuado. Total: </b>'+Math.floor(nutriente)+'%</div>');
		}
		else{
			$("#msg").append('<div class="alert alert-danger"><i class="fa fa-check-square"></i><b> Nutriente no adecuado. Total: </b>'+Math.floor(nutriente)+'%</div>');
		}

		if(social >= 66){
			$("#msg").append('<div class="alert alert-success"><i class="fa fa-check-square"></i><b> Socializadora Adecuada. Total: </b>'+Math.floor(social)+'%</div>');
		}
		else{
			$("#msg").append('<div class="alert alert-danger"><i class="fa fa-check-square"></i><b> Socializadora no adecuada. Total: </b>'+Math.floor(social)+'%</div>');
		}
		if(educativa >= 66){
			$("#msg").append('<div class="alert alert-success"><i class="fa fa-check-square"></i><b> Educativa Adecuada. Total: </b>'+Math.floor(educativa)+'%</div>');
		}
		else{
			$("#msg").append('<div class="alert alert-danger"><i class="fa fa-check-square"></i><b> Educativa no adecuada. Total: </b>'+Math.floor(educativa)+'%</div>');
		}
		//En este segmento se debe implementar la peticion Ajax para el ingreso de datos a la BD.		
	}
	//valido que todos los radios deben estar seleccionados antes de continuar
	else{
		$(".alert-danger").remove();
		$("#msg").append('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Debe seleccionar todas las opciones antes de continuar</div>');
  		return false;
	}
});	


//*************** Crear Sucursal *********************
$(function () {
$("#dialog").dialog({
autoOpen: false,
modal: true
});
});


$('#b_c_sucursal').on('click',function(event) {
	$("#dialog").dialog("option", "width", 600);
	$("#dialog").dialog("option", "height", 600);
	$("#dialog").dialog("option", "resizable", true);
	$('#dialog').dialog('open');	
});

$('#c_usuario').submit(function(event) {
	var nombre = $('#nombre').val();
	var apellido = $('#apellido').val();
	var email = $('#email').val();
	var telefono = $('#telefono').val();
	var user = $('#user').val();
	var pass = $('#password').val();
	var sucursal = $('#sucursal').val();

	//alert(nombre+" "+apellido+" "+email+" "+telefono+" "+user+" "+pass+" "+sucursal);
	return false;
});
	

