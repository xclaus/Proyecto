var href = $(location).attr('href');

if(href == 'http://localhost/sistema/index.php'){
	$.gritter.add({
	        // (string | mandatory) the heading of the notification
	        title: 'Bienvenido!!',
	        // (string | mandatory) the text inside the notification
	        text: 'El menu de la izquierda le permitira interactuar con las distintas herramientas',
	        image: 'images/admin.png'
	      });
}

