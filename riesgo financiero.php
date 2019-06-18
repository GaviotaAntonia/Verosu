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
        <img class="img-fluid" src="conphoto/108.jpg" width="1800px" style="opacity: 0.4">
        <div class="centrado">
        	<p style="font-size: 60px">
        		<b>Riesgo Financiero</b>
        	<p style="text-align: right;">Ayudamos a las organizaiones a administrar sus áreas de riesgo financiero mediante la asistencia en el diseño y la implementación de gobierno, procesos, modelos, datos, tecnología y rendimiento de informes, incluyendo soporte durante todo el ciclo de vid de las operaciones</p>
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
			</div>
			<div class="col-sm-4">
				<div class="sub-cuerpo2">
					<br><br>
					<a class="twitter-timeline" data-lang="es" data-height="400" data-theme="light" data-link-color="#8C337A" href="https://twitter.com/TwitterDev/timelines/539487832448843776?ref_src=twsrc%5Etfw">National Park Tweets - Curated tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>    		
    	</div>
    </div>

	<?php include "footer.html"; ?>
	
</body>
</html>