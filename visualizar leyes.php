<!DOCTYPE html>
<html>
<head>
	<title>VEROSU S. de R.L M.I</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link rel="shortcut icon" type="image/png" href="conphoto/ab.png"> 
  	<!--LETRA QUE SE UTLIZA-->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	
	<?php include 'nav1.html'; ?>


  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Leyes 2019</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Leyes 2018</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade"><br>
      <div class="col-sm-2">
        <h2 style="text-align: center">Leyes 2019</h2>
   
        <div id="accordion">
          <div class="card">
              <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">Leyes</a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                  <button type="button" class="btn btn-outline-success btn-block">Ley del Infonavit</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley de Ingresos de la Federación para el Ejercicio Fiscal</button>

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Codigo</a>
              </div>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  Constitucion/Presupuesto de Egreso
                </a>
              </div>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <button type="button" class="btn btn-outline-success btn-block">La Constitución Politica de los Estados Unidos Mexicanos</button>
                  <button type="button" class="btn btn-outline-success btn-block">Presupuesto de Egresos de Federación para el Ejercicio Fiscal</button>
                </div>
              </div>
            </div>
          </div>
      </div>
        <div class="col-sm-10">
          
        </div>
    </div>
    <div id="menu2" class="tab-pane fade"><br>

      <div class="col-sm-2" style="position: left;">
        <h2 style="text-align: center">Leyes 2018</h2>
   
        <div id="accordion">
          <div class="card">
              <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">Leyes</a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                  <button type="button" class="btn btn-outline-success btn-block">Ley Aduanera</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley del Infonavit</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley Federal del Trabajo</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley de Instituciones de Credito</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley del Impuesto sobre la Renta</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley de Administración Tributaria</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley de Ingresos sibre Hidraulicos</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley del Impuesto al Valor Agregado</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley General de las Sociedades Mercantiles</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley del Instituto Mexicano del Seguro Social</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley del Servicio de Administración Tribunaria</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley General de Organismos Auxiliares de Credito</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley de la Comisición Nacional Bancaria de Valores</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley de Impuestos Especial sobre Producción y Servicios</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley de Ingresos de la Federación para el Ejercicio Fiscal</button>
                  <button type="button" class="btn btn-outline-success btn-block">Ley de Prevención e Identificación de Operaciones con Recursos de Procedencia Ilicita</button>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Codigo</a>
              </div>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <button type="button" class="btn btn-outline-success btn-block">Código Financiero</button>
                  <button type="button" class="btn btn-outline-success btn-block">Código Financiero</button>
                  <button type="button" class="btn btn-outline-success btn-block">Código Civil Federal</button>
                  <button type="button" class="btn btn-outline-success btn-block">Código de Comercio</button>
                  <button type="button" class="btn btn-outline-success btn-block">Código Fiscal de la Federación</button>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  Constitucion/Presupuesto de Egreso
                </a>
              </div>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <button type="button" class="btn btn-outline-success btn-block">La Constitución Politica de los Estados Unidos Mexicanos</button>
                  <button type="button" class="btn btn-outline-success btn-block">Presupuesto de Egresos de Federación para el Ejercicio Fiscal</button>
                </div>
              </div>
            </div>
          </div>
      </div>
        <div class="col-sm-10">
          <iframe src="localhost">Enrique</iframe>
        </div>
    </div>
  </div>

	<?php include 'footer2.html'; ?>

</body>
</html>