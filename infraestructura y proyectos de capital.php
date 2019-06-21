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
  
    <!--LETRA QUE SE UTLIZA-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  #barra{
    color: black;
  }
 .btn-group-vertical>.btn, .btn-group-vertical>.btn-group {
    width: 188px;
}
.contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
    width: 100%
}
 
.texto-encima{
    position: absolute;
    top: 10px;
    left: 10px;
    color: white;
}
.centrado{
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
  <?php include 'nav2.html'; ?>
  <!---FIN DE NAV BAR-->

	<div class="contenedor" align="center">
    <img class="img-fluid" src="conphoto/117.jpg" width="1800px" style="opacity: 0.4">
    <div class="centrado">
      <p style="font-size: 60px; color: black;">
        <b>Infraestructura y Proyectos de Capital</b>
      </p>
      <p style="text-align: right; color: black;">Apoyamos en la definición de estrategias y planeación para el desarrollo de proyectos de infraestructura, y su estructuración financiera. Ayudamos en la ejecución de proyectos de capital a través de oficinas de gestión, gerenciamiento y supervisión, para obtener el retorno de inversión esperado.</p>
    </div>
  </div>

  <div class="container" style="margin-top: 30px">
    <div class="row">
			<div class="col-sm-8">
				<div class="container mt-3">
					<h2>
						Verosu S. de R.L M.I
						<small style="color: #76746E">
							<br>
							Servicios Integrales Comunicaciones y Tecnologia.
						</small>
					</h2>
					<br><br>
					<i class="fab fa-facebook-square" style="font-size: 48px; color: black"></i>
					<i class="fab fa-twitter-square" style="font-size: 48px; color: black"></i>
					<i class="fa fa-youtube-square" style="font-size: 48px; color: black"></i>
				</div>
        <br><br>
        <div class="bs-example">
          <div class="card" style="max-width: 730px">
            <div class="row no-gutters">
              <div class="col-sm-4" style="background: $868e96">
                <img src="conphoto/1.jpeg" class="card-img-top h-100" alt="...">
              </div>
            </div>
            <div class="col-sm-7">
              <div class="card-body">
                <p style="color: gray">
                  <b>Noticias</b>
                </p>
              </div>
            </div>
          </div>
        </div>
			</div>
			<div class="col-sm-4">
				<div class="sub-cuerpo2">
					<br><br>
					<a class="twitter-timeline" data-lang="es" data-height="400" data-theme="light" data-link-color="#8C337A" href="https://twitter.com/TwitterDev/timelines/539487832448843776?ref_src=twsrc%5Etfw">National Park Tweets - Curated tweets by TwitterDev</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
        <br>
        <div class="container">
          <div class="list-group">
            <a href="contacto.php" class="list-group-item list-group-item-action" style="background-color: #59C3CC; color: white">
              <b>Contacto</b>
              <button type="" class="btn btn-light btn-sm btn-block">Escribenos a traves de nuestra solicitud en línea</button>
            </a>
            <br>
            <a href="#" class="list-group-item list-group-item-action" style="background-color: #59C3CC; color: white">
              <b>Solicitud de cotización</b>
              <button type="" class="btn btn-light btn-sm btn-block">Enviar formulario electronico</button>
            </a>
            <br>
            <a href="" class="list-group-item list-group-item-action" style="background-color: #59C3CC; color: white">
              <b>Servicios</b>
            </a>
            <br>
            <div class="card">
              <div class="card-header" style="background-color: #59C3CC; color: white">
                <b>Temas Similares</b>
              </div>
              <div class="card-body">
                  <a href="#">1</a>
                  <br>
                  <a href="#">2</a>
                  <br>
                  <a href="#">3</a>
                  <br>
                  <a href="#">4</a>
                  <br>
                  <a href="#">5</a>
              </div>
            </div>
          </div>
        </div>
			</div>    		
    </div>
  </div>

	<?php include "footer.html"; ?>

</body>
</html>