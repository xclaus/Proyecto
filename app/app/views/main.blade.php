<!DOCTYPE html>
<html>
  <head>
    <title>Sistema infancia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!--Tags -->
    {{ HTML::style('http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.css', array('media' => 'screen')) }}
    {{ HTML::style('http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css', array('media' => 'screen')) }}
     
    <!-- Bootstrap -->
    {{ HTML::style('bootstrap/bootstrap.min.css', array('media' => 'screen')) }}
    {{ HTML::style('css/style2.css', array('media' => 'screen')) }}
    {{ HTML::style('//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css', array('media' => 'screen')) }}
    
    <!--Font Awesone -->
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array('media' => 'screen')) }}
    
    <!--Notificaciones-->
    <!--<link rel="stylesheet" href="css/jquery.gritter.css">-->
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>
    <div class="container">

    <nav class="navbar navbar-top">
  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>

  <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>

  <a href="index.php" class="navbar-brand">HR4BD<span class="bold"> Consultores</span></a>
  <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right user-data">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <img src="images/admin.png"> <span class="bold">#usuario#</span> <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
              <li><a href="#"><i class="fa fa-cogs"></i> Configuracion</a></li>
              #gestion#
              <!--<li><a href="gestion.php"><i class="fa fa-users"></i> Gestion Usuarios</a></li>-->
              <li><a href="logout.php"><i class="fa fa-key"></i> Logout</a></li>
            </ul>
          </li>
          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          <li class="dropdown dropdown-big leftonmobile">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud-upload"></i></a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Progress bar -->
                <p>Progreso Resilencia</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete</span>
          </div>
          </div>

                <hr>

                <!-- Progress bar -->
                <p>Progreso Cie</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            <span class="sr-only">80% Complete</span>
          </div>
          </div> 

                <hr>             

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">Ver Todo</a>
                </div>

              </li>
            </ul>
          </li>

          <!-- Sync to server link -->
          <li class="dropdown dropdown-big leftonmobile">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Using "fa fa-spin" class to rotate icon. -->
                <p><span class="label label-info"><i class="fa fa-cloud"></i></span> Sincronizar con el servidor</p>
                <hr>
                <p><span class="label label-warning"><i class="fa fa-cloud"></i></span> Sincronizar con la nube</p>

                <hr>

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">Ver Todo</a>
                </div>

              </li>
            </ul>
          </li>
          <li class="dropdown dropdown-big leftonmobile">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-comments"></i><span class="label label-info">6</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-comments"></i> Chats</h5>
                    <!-- Use hr tag to add border -->                   
                  </li>
                  <li>
                    <hr>
                    <!-- List item heading h6 -->
                    <h6><a href="#">Hola :)</a> <span class="label label-warning pull-right">10:42</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">Como estas?</a> <span class="label label-warning pull-right">20:42</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">Que estas haciendo?</a> <span class="label label-warning pull-right">14:42</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">Ver Todo</a>
                    </div>
                  </li>                                    
                </ul>
            </li>
            
            <!-- Message button with number of latest messages count-->
            <li class="dropdown dropdown-big messages-dd leftonmobile">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i> <span class="label label-primary">3</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-envelope-alt"></i> Mensajes</h5>
                    <!-- Use hr tag to add border -->
                    
                  </li>
                  <li>
                    <hr><!-- List item heading h6 -->
                    <h6><a href="#">Hola estas hay?</a></h6>
                    <!-- List item para -->
                    <p>Te llame pero no contestas, necesito que veamos los informes...</p>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">El sistema esta terminado?</a></h6>
                    <p>cuanto es el tiempo estimado...</p>
                    <hr>
                  </li>
                  <li>
                    <div class="drop-foot">
                      <a href="#">Ver Todo</a>
                    </div>
                  </li>                                    
                </ul>
            </li>

            <!-- Members button with number of latest members count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-user"></i> <span class="label label-success">7</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-user"></i> Usuarios</h5>
                    <!-- Use hr tag to add border -->                    
                  </li>
                  <li>
                    <hr>
                    <!-- List item heading h6-->
                    <h6><a href="#">Carlos Mella</a> <span class="label label-warning pull-right">User</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">Administrador</a> <span class="label label-important pull-right">Admin</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">Invitado</a> <span class="label label-warning pull-right">User</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li> 
        </ul>
</nav><!--Fin navbar-top-->
    

    <div class="content">

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
        <!-- Search form -->
        <form class="navbar-form confirm" role="search" id="bsc-rut" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar" id="busca-rut" name="busca-rut">
            <button class="btn search-button" type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav" style="">
          <!-- Main menu with font awesome icon -->

          <!-- Interfaz menu izquierdo -->
          <li><a href="index.php" class="open"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
          
          <!-- Interfaz Beneficiario -->
          <li class="has_sub"><a href="#" class=""><i class="fa fa-users"></i> <span>Beneficiario</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li> {{ HTML::link('registro_usuario', 'Registro Beneficiario'); }} </li>             
            </ul>
          </li><!--Fin Beneficiario-->
          
          <li class="has_sub"><a href="#" class=""><i class="fa fa-plus"></i> <span>Salud</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="cie.php">Cie 10 Mental</a></li>
              <li><a href="ado.php">Dep ADO</a></li>
              <li> {{ HTML::link('resilencia', 'Resilencia'); }} </li>
              
            </ul>
          </li><!--Fin Salud-->

          <li class="has_sub"><a href="#" class=""><i class="fa fa-book"></i> <span>Educacion</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="caracterizacion_educacional.php">Caracterización educacional</a></li>
              <li><a href="d_civiles.php">Bevta</a></li>
              <li><a href="#">Cobertura</a></li>
              <li><a href="#">Puntaje SIMCE</a></li>
              <li><a href="#">Nivel de educacion de adultos responsables</a></li>

            </ul>
          </li><!--Fin Educacion -->
          
          <li class="has_sub"><a href="#" class=""><i class="fa fa-flask"></i> <span>Supervivencia y Drllo</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="#">Habitabilidad De la vivienda</a></li>
              <li><a href="#">Habitabilidad Comunitaria</a></li>
              <li><a href="#">Igresos Familiares</a></li>
              <li><a href="#">Indice de Pobreza familiar</a></li>
              <li><a href="#">VIF</a></li>
              <li><a href="competencias_parentales.php">Competencias parentales</a></li> 
                           
            </ul>
          </li><!--Fin Supervivencia y Desarrollo -->

          <li class="has_sub"><a href="#" class=""><i class="fa fa-table"></i> <span>Entorno significativo</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="#">Violencia social</a></li>
              
            </ul>
          </li><!--Fin Entorno significativo-->  

          <li class="has_sub"><a href="#" class=""><i class="fa fa-briefcase"></i> <span>Habilitación Socio Laboral Parental</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="empleo1.php">Caracterización socio laboral</a></li>
              <li><a href="#">Competencias básicas padre y/o madre</a></li>
              <li><a href="#">Competencias laborales padre y/o madre</a></li>
              <li><a href="#">Emprendimiento y autoempleo</a></li>
              <li><a href="#">Competencias básicas otros significantes</a></li>
              <li><a href="#">Competencias laborales otros significantes</a></li>              
            </ul>
          </li><!--Fin Habilitación Socio Laboral Parental-->

          <li class="has_sub"><a href="#" class=""><i class="fa fa-magic"></i> <span>Participación</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="#">D° mas Respetados</a></li>
              <li><a href="#">D° menos Respetados</a></li>
            </ul>
          </li><!--Fin Participación-->

                    
         </li>
        </ul>
    </div>
    <!-- Sidebar ends -->
    
<!-- Main bar -->
    <div class="mainbar">      
      
    	@yield('contenido')
    	
    	
    </div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
    
    
    </div><!--Fin container -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/validar.js"></script>
    <script src="js/core.js"></script>
    <!--Notificaciones-->
    <script src="js/jquery.gritter.min.js"></script>
    <script src="js/notificacion.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!--Tabs -->
    <script type="text/javascript" src="http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.js"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>    
  

    <script type="text/javascript">
    
    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }
    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }
    
    function onChangeTag(input,tag) {
      alert("Changed a tag: " + tag);
    }


    
    $(function() {

      $('#tags_3').tagsInput({
        width: 'auto',
        defaultText:'Sintomas',

        //autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
        //autocomplete_url:'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
      });

      $('#tags').importTags('foo,bar,baz');

            

// Uncomment this line to see the callback functions in action
   //   $('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});   

// Uncomment this line to see an input with no interface for adding new tags.
    //$('input.tags').tagsInput({interactive:false});
    });

     
  </script>

  </body>
</html>