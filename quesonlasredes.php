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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
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
  <?php include 'nav3info.html'; ?>
  <!---FIN DE NAV BAR-->
  <div class="contenedor" align="center">
    <img class="img-fluid" src="conphoto/redes2.jpg" width="1800px" style="opacity: 0.4">
        <div class="centrado">
          <p style="font-size: 60px; color: black;">
            <b>¿Que son las redes?</b>
          <p style="text-align: right; color: black;">sistemas donde los elementos que lo componen (por lo general ordenadores) son autónomos y están conectados entre sí por medios físicos y/o lógicos y que pueden comunicarse para compartir recursos.</p>
        </div>
    </div>
      <div class="container" style="margin-top:30px">
      <div class="row">
        <div class="col-sm-8">
          <div class="container mt-4">
            <p style="color: black"><b>Articulo</b></p>
            <h2><small style="color: #76746E"><BR>¿Cuál es su finalidad?</small></h2>
            <p style="color: black">La finalidad principal para la creación de una red de ordenadores es compartir los recursos y la información en la distancia, asegurar la confiabilidad y la disponibilidad de la información, aumentar la velocidad de transmisión de los datos y reducir el costo.</p><br>
            <div style="align: center">
              <img src="conphoto/redes1.jpg" alt="" width="400px">
            </div><br>
            <b>Medios de transmisión</b><br>
            <p style="color: black"><br>El medio empleado para transmitir información limita la velocidad de la red, la distancia eficaz entre ordenadores y la topología de la red. Los cables de cobre de dos hilos o los cables coaxiales proporcionan velocidades de transmisión de algunos miles de bps (bits por segundo) a largas distancias y de unos 100 Mbps (millones de bits por segundo) a corta distancia. Las fibras ópticas permiten velocidades de entre 100 y 1.000 Mbps a largas distancias. Por lo que se refiere a las redes inalámbricas, se puede lograr transferir datos a una velocidad de 720 Kbps en un rango de distancias entre 10 y 100 metros.</p>
          </div><br><br>
          <div class="container"><br>
            <!-- Nav tabs -->
            <h5 style="text-align: center;"><small>Estructura de Redes</small></h5>
            <ul class="nav nav-tabs justify-content-center" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">El Software de Aplicaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">El software de Red</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">El Hardware de Red</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div id="home" class="container tab-pane active"><br>
                <h3 style="text-align: center;">El software de aplicaciones</h3>
                <p style="text-align: center;color: black">programas que se comunican con los usuarios de la Red y permiten compartir información (como archivos, gráficos o vídeos) y recursos (como impresoras o unidades de disco).</p>
              </div>
              <div id="menu1" class="container tab-pane fade"><br>
                <h3 style="text-align: center;">El software de red</h3>
                <p style="text-align: center;color: black">Programas que establecen protocolos para que los ordenadores se comuniquen entre sí. Dichos protocolos se aplican enviando y recibiendo grupos de datos formateados denominados paquetes.</p>
              </div>
              <div id="menu2" class="container tab-pane fade"><br>
                <h3 style="text-align: center;">El hardware de red</h3>
                <p style="text-align: center;color: black"> formado por los componentes materiales que unen los Ordenadores. Dos componentes importantes son los medios de transmisión que transportan las señales de los ordenadores (típicamente cables o fibras ópticas) y el adaptador de red, que permite acceder al medio material que conecta a los ordenadores, recibir paquetes desde el software de red y transmitir instrucciones y peticiones a otros ordenadores.</p>
              </div>
            </div>
          </div><br><br>
          <p style="text-align: center;color: black;border-top: solid 4px #5985DB"><br>En resumen<br>Las redes están formadas por conexiones entre grupos de ordenadores y dispositivos asociados que permiten a los usuarios la transferencia electrónica de información. En estas estructuras, los diferentes ordenadores se denominan estaciones de trabajo y se comunican entre sí a través de un cable o línea telefónica conectada a los servidores.Dichos servidores son ordenadores como las estaciones de trabajo pero con funciones administrativas y están dedicados en exclusiva a supervisar y controlar el acceso a la red y a los recursos compartidos. Además de los ordenadores, los cables o la línea telefónica, existe en la red el Módem para permitir la transferencia de información convirtiendo las señales digitales a analógicas y viceversa, también existen en esta estructura los llamados Hubs y Switches con la función de llevar acabo la conectividad.</p>
          <div class="container">
            <h2 style="text-align: center;"><small>Modelo OSI</small></h2>
            <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
            <table class="table table-bordered" style="text-align: center;">
              <thead>
                <tr>
                  <th style="background-color: #749AE1">#</th>
                  <th style="background-color: #749AE1">Capas</th>
                  <th style="background-color: #749AE1">Unidad de Intercambio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="background-color: #E3EBF9">7</td>
                  <td style="background-color: #E3EBF9">Aplicación</td>
                  <td style="background-color: #E3EBF9">APDU</td>
                </tr>
                <tr>
                  <td style="background-color: #E3EBF9">6</td>
                  <td style="background-color: #E3EBF9">Presentación</td>
                  <td style="background-color: #E3EBF9">PPDU</td>
                </tr>
                <tr>
                  <td style="background-color: #E3EBF9">5</td>
                  <td style="background-color: #E3EBF9">Sesión</td>
                  <td style="background-color: #E3EBF9">SPDU</td>
                </tr>
                <tr>
                  <td style="background-color: #E3EBF9">4</td>
                  <td style="background-color: #E3EBF9">Transporte</td>
                  <td style="background-color: #E3EBF9">TPDU</td>
                </tr>
                <tr>
                  <td style="background-color: #E3EBF9">3</td>
                  <td style="background-color: #E3EBF9">Red</td>
                  <td style="background-color: #E3EBF9">Paquete de Red</td>
                </tr>
                <tr>
                  <td style="background-color: #E3EBF9">2</td>
                  <td style="background-color: #E3EBF9">Enlace de Datos</td>
                  <td style="background-color: #E3EBF9">Trama de red</td>
                </tr>
                <tr>
                  <td style="background-color: #E3EBF9">1</td>
                  <td style="background-color: #E3EBF9">Fisica</td>
                  <td style="background-color: #E3EBF9">Bit</td>
                </tr>
              </tbody>
            </table>
          </div>
            <br><br>
            <div class="card-deck">
              <div class="card text-white " style="border-top: solid 4px #009975">
                <div class="card-body animated ">
                  <p style="color: #97999b">
                    <b>Noticias</b>
                  </p>
                  <p style="color: black">EEUU Lanza ciberataque contra Íran</p>
                  <p style="color: #97999b">La operación fue una recomendación del Pentágono para deteriorar el funcionamiento de la red que controla los misiles iraníes y para reducir las capacidades ofensivas informáticas de la Guardia Revolucionaria Islámica.</p>
                  <p style="color: black">
                    <a href="http://www.redusers.com/noticias/eeuu-lanzo-ciberataque-iran/"><b>Leer más</b></a>
                  </p>
                </div>
              </div>
              <div class="card text-white" style="border-top: solid 4px #009975">
                <div class="card-body animated ">
                  <p style="color: #97999b">
                    <b>Noticias</b>
                  </p>
                  <p style="color: black">La comunidad andaluza, entre las tres peor protegidas ante ataques informáticos</p>
                  <p style="color: #97999b">En el primer trimestre se detectaron 130.000 problemas de seguridad que afectan a empresas y ciudadanos</p>
                  <p style="color: black">
                  <a href="https://www.larazon.es/local/andalucia/la-comunidad-andaluza-entre-las-tres-peor-protegidas-ante-ataques-informaticos-EI23900613"><b>Conoce más</b></a>
                  </p>
                </div>
              </div>
            </div>

        </div>


      <div class="col-sm-4">          
                <div class="container">
                  <div class="list-group"><br>
                    <a href="contacto.php" class="list-group-item list-group-item-action" style="background-color: #459FE1; color: black;"><b>Contacto</b><br>
                      <button type="" class="btn btn-light btn-sm btn-block">Escribenos a traves de nuestra solicitud en línea</button></a><br> 
                    <br>
                    <a href="#" class="list-group-item list-group-item-action" style="background-color: #459FE1; color: black;"><b>Solicitud de cotización</b><br><button type="" class="btn btn-light btn-sm btn-block">Enviar Formulario electronico</button></a><br> 
                    <br>

                      <h3><br>SERVICIOS Y ANUNCIOS</h3>
                      <div id="accordion">
                        <div class="card">
                          <div class="card-header" style="background-color: #459FE1">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne" style="color: black">Gestion de talento</a>
                          </div>
                          <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                              <a href="gestion.talento.php" style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" style="background-color: #459FE1">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color: black">Transformacion Organizacional</a>
                          </div>
                          <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                              <a href="transformacionorganizacional.php" style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" style="background-color: #459FE1">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" style="color: black">Gestion del cambio</a>
                          </div>
                          <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                              <a href="gestionoferta.php" style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" style="background-color: #459FE1">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapsefour" style="color: black">Transformacion de Recursos Humanos</a>
                          </div>
                          <div id="collapsefour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                              <a href="transformacionderecursos.php" style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
                            </div>
                          </div>
                        </div><br>
                      </div>

                    <div class="card">
                      <div class="card-header" style="background-color: #215DCF; color: white; text-align: center;"><b>Temas Similares</b></div>
                        <div class="card-body">
                          <a href="enbreveifrs.php">En Breve IFRS</a><br>
                          <a href="asesoriacontable.php">Asesoria Contable</a>
                          <br><a href="auditoriadeestadosfinancieros.php">Auditoria de Estados Financieros</a>
                          <br><a href="finanzascorporativas.php">Finanzas Corporativas</a>
                          <br><a href="auditoriainterna.php">Auditoria interna</a>
                        </div> 
                    </div>
                  </div>
                </div>
      </div>  </div> 
   </div>
 

  <?php include "footer.html"; ?>

</body>
</html>