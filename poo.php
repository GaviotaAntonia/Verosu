<!DOCTYPE html>
<html>
  <head>

	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>VEROSU S. de R.L M.I</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link rel="shortcut icon" type="image/png" href="conphoto/ab.png"> 

	  <link rel="stylesheet" href="css/masestilos.css">
	  <link rel="stylesheet" href="css/estilos.css">
	  <link rel="stylesheet" href="css/animate.css">
  
    <!--LETRA QUE SE UTLIZA-->
	  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <style>
      /* Make the image fully responsive */
      .carousel-inner img 
      {
        width: 100%;
        height: 100%;
      }
  
      #barra
      {
        color: black;
      }
 
      .btn-group-vertical>.btn, .btn-group-vertical>.btn-group 
      {
        width: 188px;
      }
    
      .contenedor
      {
        position: relative;
        display: inline-block;
        text-align: center;
        width: 100%
      }
 
      .texto-encima
      {
        position: absolute;
        top: 10px;
        left: 10px;
        color: white;
      }

      .centrado
      {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: White;
      }
    </style>
  </head>
  
  <body>
    
    <!--NAV1-->
      <?php include "nav.html"; ?>
    <!--nav 2-->
      <?php include 'nav3info.html'; ?>
    <!---FIN DE NAV BAR-->
    <div class="contenedor" align="center">
    	<img class="img-fluid" src="conphoto/ingsistemas.jpg" width="1800px" style="opacity: 0.2">
    	<div class="centrado">
    		<p style="font-size: 60px; color: black;">
    			<h1 class="animated infinite bounce delay-1s">Programación Orientada a Objetos</h1>
    			<p class="animated flash delay-2s" style="text-align: right; color: black;">Es un paradigma de programación que viene a innovar la forma de obtener resultados. Los objetos manipulan los datos de entrada para la obtención de datos de salida específicos, donde cada objeto ofrece una funcionalidad especial.</p>
        </div>
      </div>
      <div style="text-align: center;"><br>
      	<h1 class="animated tada" style="color: black">Tipos de Programación Orientada a Objetos</h1>
      	<div class="container"><br>
      		<!-- Nav pills -->
      		<ul class="nav nav-tabs justify-content-center" role="tablist">
      			<li class="nav-item">
      				<a class="nav-link active" data-toggle="pill" href="#home">Basada en clases</a>
      			</li>
      			<li class="nav-item">
      				<a class="nav-link" data-toggle="pill" href="#menu2">Basada en prototipos</a>
      			</li>
      		</ul>
      		<!-- Tab panes -->
      		<div class="tab-content">
      			<div id="home" class="container tab-pane active"><br>
      				<h3 class="animated bounceInUp">¿Que ofrecemos?</h3>
      				<p style="color: black; text-align: center;" class="animated bounceInUp">Es la más ampliamente usada por los lenguajes de programación orientada a objetos. Por ejemplo es usada por Java, C++ y C#. Se basa en crear una estructura molde llamada clase donde se especifican los campos y métodos que tendrán nuestros objetos. Cada vez que necesitamos un objeto creamos una instancia (o copia del objeto) usando la clase como molde.</p>	
      			</div>
      			<div id="menu2" class="container tab-pane fade"><br>
      				<h3 class="animated pulse">¿Porqué es importante hacer el rediseño?</h3>
      				<p style="color: black" class="animated pulse"> Es soportado en Javascript, Python y Ruby. No hay clases, solo hay objetos. El mecanismo para la reutilización está dado por la clonación de objetos. Se crean directamentos objetos y cuando se quiere generar otro con la misma estructura se usa clonación. Una vez clonado si queremos podemos agregar los campos y métodos necesarios. Un objeto prototípico es un objeto que se utiliza como una plantilla a partir de la cual se obtiene el conjunto inicial de propiedades de un objeto. Cualquier objeto puede ser utilizado como el prototipo de otro objeto, permitiendo al segundo objeto compartir las propiedades del primero.</p>
      			</div>
      		</div>
      	</div><br>      	
      </div>

      <div class="container" style="margin-top: 30px">
    	  <div class="row">
			    <div class="col-sm-8"><br><br>
            <div class="bs-example">
              <div class="card" style="max-width: 730px;">
                <div class="row no-gutters">
                  <div class="col-md-8" style="border-top: solid 4px #EF84F6">
                    <div class="card-body">
                      <b>
                        <p style="color: gray">Articulo</p>
                      </b>
                      <h5 class="card-title" style="color: black">Programación Orientada a Objetos JAVA</h5>
                      <p class="card-text" style="color: black">Bases de datos estáticas. Típicas de la inteligencia empresarial y otras áreas de análisis histórico, son bases de datos de sólo lectura, de las cuales se puede extraer información, pero no modificar la ya existente.</p>
                      <a href="https://concepto.de/base-de-datos/#ixzz5rtSlL700" class="btn btn-outline-danger">Leer más</a>
                    </div>
                  </div>
                  <div class="col-md-4" style="background: #868e96;">
                    <img src="conphoto/java.png" class="card-img-top h-100" alt="...">
                  </div>
                </div>
              </div>
            </div>
            <br>         
            <div class="bs-example">
            	<div class="card" style="max-width: 730px;">
            		<div class="row no-gutters">                	
            			<div class="col-md-4" style="background: #3795E3;">
            				<img src="conphoto/IDE_ImagenDestacada.jpg" class="card-img-top h-100" alt="...">
            			</div>
            			<div class="col-md-8" style="background: #3795E3;border-top: solid 4px #E33737">
            				<div class="card-body"><b><p style="color: #E1EAD8">Informacion</p></b>
            					<h5 class="card-title" style="color: white">IDE para muchos lenguajes de información</h5>
            					<p class="card-text" style="color: white">Un entorno de desarrollo integrado, es un entorno de programación que ha sido empaquetado como un programa de aplicación, es decir, consiste en un editor de código, un compilador, un depurador y un constructor de interfaz gráfica (GUI).</p>
            					<a href="#" class="btn btn-outline-info" style="color: white">Leer más</a>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
        </div><br>
        <div class="col-sm-4">
        	<div class="container">
        		<div class="list-group"><br>
        			<a href="contacto.php" class="list-group-item list-group-item-action" style="background-color: #4AAF9B; color: white;; text-align: center;"><b>Contacto</b><br>
        				<button type="" class="btn btn-light btn-sm btn-block">Escribenos a traves de nuestra solicitud en línea</button></a><br><br>
        				<a href="#" class="list-group-item list-group-item-action" style="background-color: #4AAF9B; color: white; text-align: center;"><b>Solicitud de cotización</b><br><button type="" class="btn btn-light btn-sm btn-block">Enviar Formulario electronico</button></a><br><br>
        			</div>
        	</div>
        	<h3><br>SERVICIOS Y ANUNCIOS</h3>
        	<div id="accordion">
        		<div class="card">
        			<div class="card-header" style="background-color: #EA6969">
        				<a class="card-link" data-toggle="collapse" href="#collapseOne" style="color: white">Tecnwhitea</a>
        			</div>
        			<div id="collapseOne" class="collapse show" data-parent="#accordion">                
        				<div class="card-body">
        					<a href="tecnologia.php" style="color: black">-----------------</a>
        				</div>
        			</div>
        		</div>
        		<div class="card">
        			<div class="card-header" style="background-color: #EA6969">
        				<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color: white">VEROSU Digital</a>
        			</div>
        			<div id="collapseTwo" class="collapse" data-parent="#accordion">
        				<div class="card-body">
        					<a href="fusiones y adquisiciones.php" style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
        				</div>
        			</div>
        		</div>
        		<div class="card">
        			<div class="card-header" style="background-color: #EA6969">
        				<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" style="color:white">ORACLE</a>
        			</div>
        			<div id="collapseThree" class="collapse" data-parent="#accordion">
        				<div class="card-body">
        					<a href="oracle.php" style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
        				</div>                    
        			</div>
        		</div>
        		<div class="card">
        			<div class="card-header" style="background-color: #EA6969">
        				<a class="collapsed card-link" data-toggle="collapse" href="#collapsefour" style="color: white">SAP</a>
        			</div>
        			<div id="collapsefour" class="collapse" data-parent="#accordion">
        				<div class="card-body">
        					<a href="sap.php" style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
        				</div>
        			</div>
        		</div>
        		<div class="card">
        			<div class="card-header" style="background-color: #EA6969">
        				<a class="collapsed card-link" data-toggle="collapse" href="#collapsefive" style="color: white">Integracion Tecnologica</a>
        			</div>
        			<div id="collapsefive" class="collapse" data-parent="#accordion">
        				<div class="card-body">
        					<a href="it.php" style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
        				</div>
        			</div>
            	</div>
            <br><br>
        </div>

          <div class="card"><br>
            <div class="card-header" style="background-color: #AF4A9C; color: white"><b>Temas Similares</b></div>
              <div class="card-body">
                <a href="conexionesredes.php">Diseño Grafico</a><br>
                <a href="modpag.php">Edición en Photoshop</a>
                <br><a href="poo.php">Programación</a>
                <br><a href="instalacionsoft.php">Instalaciones</a>
                <br><a href="#">Asesorias</a>
                <br><a href="#">Seguridad</a>
              </div> 
          </div>
      </div>          		
    	</div>
    </div>

	<?php include "footer.html"; ?>
	
</body>
</html>