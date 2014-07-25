

//***************Funciones Varias***********************
//validar login
function msg(tipo,icono,msg, id){
  $(id).show();
  $(id).html('');
  $(id).append('<div class="'+tipo+'"><i class="'+icono+'"></i>'+msg+'</div>');
}

function eliminar(){
  
}

//validar mail
function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) )
        
        alert("Error: La dirección de correo " + email + " es incorrecta.");
}
//********************************************************

/***********************Validar login ********************/

$( ".formid" ).submit(function() {
  var user = $("#username").val();
  var pass = $("#password").val();

  if(user=='' || pass==''){
    msg("alert alert-danger", "fa fa-exclamation-triangle", ' Ingrese Usuario y/o Password', '#msg');
  }
  else{
   $.ajax({
      url: "php/peticiones.php?doc=login",
      type: 'GET',
      data: {
        user:   $("#username").val(),
        pass:   $("#password").val(),
        
      }
  }).done(function(resp){
      if(resp == 1){
        
        $( ".login-form" ).hide(2000);
        $("#progressbar").show(1300);
        
        var progressbar = $("#progressbar"),
        progressLabel = $(".progress-label");
        
        progressbar.progressbar({
        value: false,
        change: function(){
        progressLabel.text( progressbar.progressbar( "value" ) + "%" );
        
        },
        complete: function(){
        progressLabel.text("Completado!");
        location.href = 'index.php';
        } 
        
        });
        
        function progress() {
        var val = progressbar.progressbar( "value" ) || 0;
        
        progressbar.progressbar( "value", val + 1 );
        
        if ( val < 99 ) {
        setTimeout( progress, 70 );
        }
        }
        
        setTimeout( progress, 800 );

      }
      else{
        msg("alert alert-danger", "fa fa-exclamation-triangle", ' Usuario no registrado', '#msg' );
      }
    }
  ); 

  }

return false;  

});

//Validar d_civiles
$("#d_civiles").submit(function(){
  var nombre    = $("#nombre").val();
  var rut       = $("#rut").val();
  var estado    = $("input[name='estado']:checked").val();
  var fecha     = $("#fecha").val();
  var region    = $("#region").val(); 
  var comuna    = $("#comuna").val();
  var direccion = $("#direccion").val();
  var condicion = $("input[name='condicion']:checked").val();
  var conadi    = $("input[name='conadi']:checked").val();
  var bne       = $("input[name='bne']:checked").val();

  if(nombre == '' || rut == '' || estado == '' || fecha == '' || region =='0' || comuna =='' || direccion == '' || condicion == '' || conadi == '' || bne == ''){
    $('#msg').html('');
    $('#msg').append('<div class="alert alert-danger"><i class="fa fa-check-square"></i> Debe llenar todos los campos antes de continuar</div>');

  }
  else{
    $('#msg').html('');
    $('#d_civiles').hide('slow');
    $.ajax({
      url: "php/peticiones.php?doc=d_civiles",
      type: 'GET',
      data: {
        nombre:   $("#nombre").val(),
        rut:      $("#rut").val(),
        estado:   $("input[name='estado']:checked").val(),
        fecha:    $("#fecha").val(),
        region:   $("#region").val(), 
        comuna:   $("#comuna").val(),
        direccion: $("#direccion").val(),
        condicion: $("input[name='condicion']:checked").val(),
        conadi:    $("input[name='conadi']:checked").val(),
        bne:       $("input[name='bne']:checked").val(),
      }
  }).done(
    function(resp)
    {
      if(resp == 'insert'){
        $('#msg').html('');
        $('#msg').append('<div class="alert alert-success"><i class="fa fa-check-square"></i> Informacion guardada correctamente</div>');
      }
      if(resp  == 'error'){
        $('#msg').html('');
        $('#msg').append('<div class="alert alert-danger"><i class="fa fa-check-square"></i>Error al Ingresar los Datos</div>');

      }
    }
  );

  }

  return false;
});  


//Empleo 1
$("#inhibidores").submit(function(){
  var educacion    = $("input[name='educacion']").is(":checked"); 
  var cuidado      = $("input[name='cuidado']").is(":checked"); 
  var dental       = $("input[name='dental']").is(":checked"); 
  var ofta         = $("input[name='ofta']").is(":checked"); 
  var reha         = $("input[name='reha']").is(":checked"); 
  var alcoholismo  = $("input[name='alcoholismo']").is(":checked"); 
  var antecedentes = $("input[name='antecedentes']").is(":checked");
  var militar      = $("input[name='militar']").is(":checked");
  //var empleo       = $("input[name='empleo']:checked").val();
  //
  var e = $("input[name='educacion']:checked").val();
  var c = $("input[name='cuidado']:checked").val();
  var s = $("input[name='dental']:checked").val();

      //elimino todos los elementos que contienen un no!
      if(e == 0){
      $("#e").remove();
      
      }
      if(c == 0){
      $("#c").remove();
      
      }
      if(s == 0){
      $("#s").remove();
      
      }

      if (e && c && s == 0) {
        $("#msg").append('<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> No registra Inhibidores Asociados</div>');
      };    
  

  if(educacion && cuidado && dental && ofta && reha && alcoholismo && antecedentes && militar){
  $('#inhibidores').hide('slow');
  $(".alert-danger").remove(); 
  $('#opciones').show('slow');
  
  return false;
  }
  else{
  $(".alert-danger").remove(); 
  $("#msg").append('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Debe seleccionar todas las opciones antes de continuar</div>');
  return false;
  
  }

});

//tabs empleo 1
  $('[data-toggle=tab]').click(function(){
  if ($(this).parent().hasClass('active')){
  $($(this).attr("href")).toggleClass('active');
  }
  })

/****************** Selects dinamicos Educacion **************/
//valido selects de educacion
$('#region').change(function(){
  if($('#region').val() == 'rm'){
    var newOptions = {
    'seleccione' : 'Seleccione',  
    'recoleta' : 'Recoleta',
    };
    var selectedOption = 'seleccione';
    var select = $('#comuna');

    if(select.prop) {
      var options = select.prop('options');
    }
    else {
      var options = select.attr('options');
    }
    $('option', select).remove();

    $.each(newOptions, function(val, text) {
        options[options.length] = new Option(text, val);
    });
    select.val(selectedOption);

  }

});


// agrego las centros de la comuna
$('#comuna').change(function(){
  if($('#comuna').val() == 'recoleta'){
    var newOptions = {
    'seleccione' : 'Seleccione',  
    'daem' : 'Dirección de educación municipal',
    'lajar' : 'Liceo de Adultos Jorge Alesandri Rodriguez',
    
    };
    var selectedOption = 'seleccione';
    var select = $('#centro');

    if(select.prop) {
      var options = select.prop('options');
    }
    else {
      var options = select.attr('options');
    }
    $('option', select).remove();

    $.each(newOptions, function(val, text) {
        options[options.length] = new Option(text, val);
    });
    select.val(selectedOption);
  }

});
/*****************************************************************/ 

//cargo el mapa en el div correspondiente

$('#centro').change(function(){
  $('.iframe').html("");

  if($('#centro').val() == 'daem'){
    $('#g-map').hide();
    $('#g-loading').show('fast').hide(3000);
    $('.iframe').hide(2000).show(2000);
    $('.iframe').append('<iframe width="425" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Manzano+538,+Recoleta&amp;aq=0&amp;oq=Manzano+538+re&amp;sll=-33.387414,-70.642197&amp;sspn=0.001397,0.002494&amp;ie=UTF8&amp;hq=&amp;hnear=Manzano+538,+Recoleta,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.425496,-70.642862&amp;spn=0.01576,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.cl/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Manzano+538,+Recoleta&amp;aq=0&amp;oq=Manzano+538+re&amp;sll=-33.387414,-70.642197&amp;sspn=0.001397,0.002494&amp;ie=UTF8&amp;hq=&amp;hnear=Manzano+538,+Recoleta,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.425496,-70.642862&amp;spn=0.01576,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>').show('slow');
  }
  if($('#centro').val() == 'lajar'){
    $('#g-map').hide();
    $('#g-loading').show('fast').hide(3000);
    $('.iframe').hide(2000).show(2000);
    $('.iframe').append('<iframe width="425" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Recoleta+632,+Santiago&amp;aq=0&amp;oq=recoleta+632&amp;sll=-38.613887,-72.176492&amp;sspn=2.476643,5.108643&amp;ie=UTF8&amp;hq=&amp;hnear=Recoleta+632,+Recoleta,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.424708,-70.645695&amp;spn=0.01576,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.cl/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Recoleta+632,+Santiago&amp;aq=0&amp;oq=recoleta+632&amp;sll=-38.613887,-72.176492&amp;sspn=2.476643,5.108643&amp;ie=UTF8&amp;hq=&amp;hnear=Recoleta+632,+Recoleta,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.424708,-70.645695&amp;spn=0.01576,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>').show('slow');
  }
  

});

$('#btn-edc').click(function(){
  
  if($('#centro').val() == '')
    $('.msg-tab-edc').append('<div class="alert alert-danger"><i class="fa fa-check-square"></i> Debe llenar todos los campos antes de continuar</div>');

  else
  //Creo el Objeto ajax
  //Valido el envio de datos mediante ajax
  $.ajax({
      url: "php/ingreso.php?doc=edc",
      type: 'GET',
      data: {
        region:$('#region').val(),
      }
  }).done(
    function(resp)
    {
      if(resp == 'rm'){
        $('#tab-edc').hide(2000);
        $('.msg-tab-edc').html('');
        $('.msg-tab-edc').append('<div class="alert alert-success"><i class="fa fa-check-square"></i> Informacion guardada correctamente</div>');
      }
      else{
        $('#tab-edc').hide(2000);
        $('.msg-tab-edc').html('');
        $('.msg-tab-edc').append('<div class="alert alert-danger"><i class="fa fa-check-square"></i>Error al Ingresar los Datos</div>');

      }
    }
  );
});



/***************Select dinamico cuidado***********************************/
$('#region-cdo').change(function(){
  if($('#region-cdo').val() == 'rm'){
    var newOptions = {
    'seleccione' : 'Seleccione',  
    'recoleta' : 'Recoleta',
    };
    var selectedOption = 'seleccione';
    var select = $('#comuna-cdo');

    if(select.prop) {
      var options = select.prop('options');
    }
    else {
      var options = select.attr('options');
    }
    $('option', select).remove();

    $.each(newOptions, function(val, text) {
        options[options.length] = new Option(text, val);
    });
    select.val(selectedOption);

  }

});


// agrego las opciones de comuna
$('#comuna-cdo').change(function(){
  if($('#comuna-cdo').val() == 'recoleta'){
    var newOptions = {
    'seleccione' : 'Seleccione',  
    'jid' : 'Jardin Infantil Dominguito',
    'jilp' : 'Jardin Infantil Las Pequitas',
    };
    var selectedOption = 'seleccione';
    var select = $('#centro-cdo');

    if(select.prop) {
      var options = select.prop('options');
    }
    else {
      var options = select.attr('options');
    }
    $('option', select).remove();

    $.each(newOptions, function(val, text) {
        options[options.length] = new Option(text, val);
    });
    select.val(selectedOption);
  }

});
/*****************************************************************/ 

//cargo el mapa en el div correspondiente

$('#centro-cdo').change(function(){
  $('.iframe-cdo').html("");

  if($('#centro-cdo').val() == 'jid'){
    $('#cdo-map').hide();
    $('#cdo-loading').show('fast').hide(3000);
    $('.iframe-cdo').hide(2000).show(2000);
    $('.iframe-cdo').append('<iframe width="425" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Francisco+Cerda+907,+Santiago&amp;aq=0&amp;oq=francisco+cerda+907&amp;sll=-33.424685,-70.645659&amp;sspn=0.010333,0.019956&amp;ie=UTF8&amp;hq=&amp;hnear=Francisco+Cerda+907,+Recoleta,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.392251,-70.648184&amp;spn=0.015766,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.cl/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Francisco+Cerda+907,+Santiago&amp;aq=0&amp;oq=francisco+cerda+907&amp;sll=-33.424685,-70.645659&amp;sspn=0.010333,0.019956&amp;ie=UTF8&amp;hq=&amp;hnear=Francisco+Cerda+907,+Recoleta,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.392251,-70.648184&amp;spn=0.015766,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>').show('slow');
  }
  if($('#centro-cdo').val() == 'jilp'){
    $('#cdo-map').hide();
    $('#cdo-loading').show('fast').hide(3000);
    $('.iframe-cdo').hide(2000).show(2000);
    $('.iframe-cdo').append('<iframe width="425" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Santa+Ana,+Recoleta&amp;aq=0&amp;oq=Santa+Ana+338&amp;sll=-33.395133,-70.6322&amp;sspn=0.010337,0.019956&amp;ie=UTF8&amp;hq=&amp;hnear=Santa+Ana,+Recoleta,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.395118,-70.632219&amp;spn=0.015765,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.cl/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Santa+Ana,+Recoleta&amp;aq=0&amp;oq=Santa+Ana+338&amp;sll=-33.395133,-70.6322&amp;sspn=0.010337,0.019956&amp;ie=UTF8&amp;hq=&amp;hnear=Santa+Ana,+Recoleta,+Santiago,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;ll=-33.395118,-70.632219&amp;spn=0.015765,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>').show('slow');
  }

});

$('#btn-cdo').click(function(){
  $('#tab-cdo').hide(2000);
  $('.msg-tab-cdo').html('');
  $('.msg-tab-cdo').append('<div class="alert alert-success"><i class="fa fa-check-square"></i> Informacion guardada correctamente</div>');
});


//creacion de usuarios
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
  var nombre   = $('#nombre').val();
  var apellido = $('#apellido').val();
  var email    = $('#email').val();
  var telefono = $('#telefono').val();
  var user     = $('#user').val();
  var pass     = $('#password').val();
  var sucursal = $('#sucursal').val();

  if(nombre =="" || apellido=="" || email=="" || telefono=="" || user== "" || pass=="" || sucursal==""){
    
    msg("alert alert-danger", "fa fa-exclamation-triangle", ' Debe ingresar todos los datos', '#msg');

  }

  else{
    //valido mail
    var filter=/^[A-Za-z][A-Za-z0-9_]*@[A-Za-z0-9_]+\.[A-Za-z0-9_.]+[A-za-z]$/;
    if(!filter.test(email)){
       msg("alert alert-danger", "fa fa-exclamation-triangle", ' Correo invalido', '#msg');
      return false;
    }
    
    //Envio datos
    $.ajax({
      url: "php/peticiones.php?doc=c_usuario",
      type: 'GET',
      data: {
         nombre   : $('#nombre').val(),
         apellido : $('#apellido').val(),
         email    : $('#email').val(),
         telefono : $('#telefono').val(),
         user     : $('#user').val(),
         pass     : $('#password').val(),
         sucursal : $('#sucursal').val(),
      }
  }).done(
    function(resp)
    {
      if(resp == 1){
        $('#c_usuario').hide('slow');
                
        if($('#dialog').dialog('close')){
          location.reload();
        }

      }
      else{
        $('#c_usuario').hide('slow');
        msg("alert alert-danger", "fa fa-exclamation-triangle", ' Intentelo nuevamente ', '#msg');
      }
    }
  );
    msg("alert alert-success", "fa fa-exclamation-triangle", ' Correcto', '#msg');
  }

  //alert(nombre+" "+apellido+" "+email+" "+telefono+" "+user+" "+pass+" "+sucursal);
  return false;
});


/***************** Cie 10 **********************/

$("#cie").click( function(){
  var lista = $('#tags_3').val();
  
  if(lista == ''){
    msg("alert alert-danger", "fa fa-exclamation-triangle", ' Debe ingresar sintomas', '#msg' );
  }
  else{
    $('#msg').html(''); //elimino la advertencia
    
      $.ajax({
        
        url : 'php/peticiones.php?doc=cie_10',
        type : "GET",
        dataType: "json",
        data: {
          lista : $('#tags_3').val(),
        },
        success: function (datos) {
          $('#result').html('');
          var tabla = '<table class="table table-striped table-bordered" id="tabla">';
          tabla +="<th>Codigo</th><th>Descripcion</th><th>Pautas</th>";
          
          $.each(datos, function(index){
             
             var codigo = datos[index].codigo;
             var descripcion = datos[index].descripcion;
             var pautas = datos[index].pautas;

             
             tabla += '<tr><td><div id="codigo'+codigo+'">'+codigo+'</div></td><td>'+descripcion+'</td><td>'+pautas+'</td></tr>';
              $('#result').html(tabla);
            //console.log('success :' + codigo );
          });
        }
    });
  }
});


