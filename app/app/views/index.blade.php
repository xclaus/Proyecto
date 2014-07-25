<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Infancia | Login</title>
	<link rel="shortcut icon" href="images/favicon.ico" />	
	{{ HTML::style('//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css', array('media' => 'screen')) }}
	{{ HTML::style('bootstrap/bootstrap.min.css', array('media' => 'screen')) }}
	{{ HTML::style('css/style.css', array('media' => 'screen')) }}
	{{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array('media' => 'screen')) }}
    
</head>
<body style="background: #FFF">
	<div class="container">

		<div class="login-header">
			<div class="login-content">
				<div class="logo" align="center">
					<img src="images/brain.jpg" alt="" >
					<p class="descripcion">Estimado usuario, identif&iacute;cate para acceder al sistema!</p>

				</div>
			</div>
		</div>
		
		<div id="progressbar">
			<div class="progress-label">Loading...</div>

		</div>

		<div class="login-form">
						
			<div class="form-cont">
				<div id="msg" style="display:none"></div>
				
				<h2>Sign In</h2>
			<div class="row">
				
			{{Form::open(array('url' => 'login', 'method' => 'post', 'class' => 'formid'));}}

				<div class="col-md-12">
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-users"></i></span>
					  {{Form::text('username','', array('class' => 'form-control', 'placeholder' => 'Username', 'id' => 'username'));}}
					</div>
				</div><!--Fin col-->
			</div><!--Fin row-->

			<div class="row">
				<div class="col-md-12">
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-key"></i></span>
					  {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'id' => 'password'));}}
					  
					</div>					
				</div><!--Fin col-->
			</div><!--Fin row-->

			<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					
				</div>
				<div class="col-md-6">
				
				{{ Form::submit('Log In', array('class' => 'btn btn-warning pull-right'));}}
					
				</div>
			</div>
		</div>
			</div>
		</div><!--Fin login form-->
		{{ Form::close(); }}
		
		<div class="row">
			<div class="col-md-12">
				<div class="footer">
				<p align="center">Desarrollado por HR4BD Consultores. &copy; Todos los derechos reservados</p>
				</div>
			</div>
		</div>
		
</diV>
<!--Fin container-->
{{ HTML::script('https://code.jquery.com/jquery.js') }}
{{ HTML::script('http://code.jquery.com/ui/1.10.3/jquery-ui.js') }}
{{ HTML::script('js/valida.js') }}
{{ HTML::script('bootstrap/bootstrap.min.js') }}


</body>
</html>