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
    <div class="row" style="width: 1918px;">
      <div class="col-sm-2">
        <h2 style="text-align: center">Leyes 2019</h2>
   
        <div id="accordion">
          <div class="card">
              <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">Leyes</a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                  <a class="nav-link" data-toggle="tab" href="#ley_del_infonavit_2019">Ley del Infonavit</a>
                  <a class="nav-link" data-toggle="tab" href="#ley_del_mercado_de_valores_2019">Ley del mercado de valores</a>
                  <a class="nav-link" data-toggle="tab" href="#ley_de_ingresos_de_la_federacion_para_el_ejercicio_fiscal_2019">Ley de Ingresos de la Federación para el Ejercicio Fiscal</a>
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
                  <a class="nav-link" data-toggle="tab" href="#la_constitucion_politica_de_los_estados_unidos_mexicanos_2019">La Constitución Politica de los Estados Unidos Mexicanos</a>
                  <a class="nav-link" data-toggle="tab" href="#presupuesto_de_egresos_de_federacion_para_el_ejercicio_fiscal_2019">Presupuesto de Egresos de la Federación para el Ejercicio Fiscal</a>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-sm-10">
        <div class="tab-content">
          <div id="ley_del_infonavit_2019" class="tab-pane active">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2019/LEY DEL INFONAVIT.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_del_mercado_de_valores_2019" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2019/LEY DEL MERCADO DE VALORES.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_de_ingresos_de_la_federacion_para_el_ejercicio_fiscal_2019" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2019/LEY DE INGRESOS DE LA FEDERACION PARA EL EJERCICIO FISCAL DE  2019.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="la_constitucion_politica_de_los_estados_unidos_mexicanos_2019" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2019/LA CONSTITUCION  POLITICA DE LOS ESTADOS UNIDOS MEXICANOS.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="presupuesto_de_egresos_de_federacion_para_el_ejercicio_fiscal_2019" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2019/PRESUPUESTO DE EGRESOS DE LA FEDERACION PARA EL EJERCICIO FISCAL DE  2019.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>

    <div id="menu2" class="tab-pane  fade"><br>
      <div class="row" style="width: 1918px;">
        <div class="col-sm-2" style="position: left;">
          <h2 style="text-align: center">Leyes 2018</h2>
   
          <div id="accordion">
            <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseOne">Leyes</a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                  <div class="card-body">
                    <a class="nav-link" data-toggle="tab" href="#ley_aduanera">Ley Aduanera</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_del_infonavit">Ley del Infonavit</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_federal_del_trabajo">Ley Federal del Trabajo</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_de_instituciones_de_credito">Ley de Instituciones de Credito</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_del_impuestos_sobre_la_renta">Ley del Impuesto sobre la Renta</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_de_administracion_tributaria">Ley de Administración Tributaria</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_de_ingresos_sobre_hidraulicos">Ley de Ingresos sobre Hidraulicos</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_del_impuestos_al_valor_agregado">Ley del Impuesto al Valor Agregado</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_general_de_las_sociedades_mercantiles">Ley General de las Sociedades Mercantiles</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_del_instituto_mexicano_del_seguro_social">Ley del Instituto Mexicano del Seguro Social</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_del_servicio_de_administracion_tribunaria">Ley del Servicio de Administración Tribunaria</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_general_de_organismos_auxiliares_de_credito">Ley General de Organismos Auxiliares de Credito</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_de_la_comision_nacional_bancaria_de_valores">Ley de la Comisición Nacional Bancaria de Valores</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_de_impuestos_especial_sobre_produccion_y_servicios">Ley de Impuestos Especial sobre Producción y Servicios</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_de_ingresos_de_la_federeacion_para_el_ejercicio_fiscal">Ley de Ingresos de la Federación para el Ejercicio Fiscal</a>
                    <a class="nav-link" data-toggle="tab" href="#ley_federal_para_prevencion_e_identificacion_de_operaciones_con_recursos_de_procedencia_ilicita">Ley Federal para Prevención e Identificación de Operaciones con Recursos de Procedencia Ilicita</a>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Codigo</a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <a class="nav-link" data-toggle="tab" href="#codigo_financiero_2018">Código Financiero</a>
                    <a class="nav-link" data-toggle="tab" href="#codigo_civil_el_d_f_2018">Código Civil el D.F.</a>
                    <a class="nav-link" data-toggle="tab" href="#codigo_civil_federa_2018">Código Civil Federal</a>
                    <a class="nav-link" data-toggle="tab" href="#codigo_de_comercio_2018">Código de Comercio</a>
                    <a class="nav-link" data-toggle="tab" href="#codigo_fiscal_de_la_federacion_2018">Código Fiscal de la Federación</a>
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
                    <a class="nav-link" data-toggle="tab" href="#la_constitucion_politica_de_los_estados_unidos_mexicanos_2018">La Constitución Politica de los Estados Unidos Mexicanos</a>
                    <a class="nav-link" data-toggle="tab" href="#presupuesto_de_egresos_de_federacion_para_el_ejercicio_fiscal">Presupuesto de Egresos de la Federación para el Ejercicio Fiscal</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-sm-10">
        <div class="tab-content">
          <div id="ley_aduanera" class="tab-pane active">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY ADUANERA.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_del_infonavit" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DEL INFONAVIT.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_federal_del_trabajo" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY FEDERAL DE TRABAJO.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_de_instituciones_de_credito" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DE INSTITUCIONES DE CREDITO.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_del_impuestos_sobre_la_renta" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DE IMPUESTOS SOBRE LA RENTA.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_de_administracion_tributaria" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DE ADMINISTRACION TRIBUTARIA.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_de_ingresos_sobre_hidraulicos" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DE INGRESOS SOBRE HIDROCARBUROS.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_del_impuestos_al_valor_agregado" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DEL IVA.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_general_de_las_sociedades_mercantiles" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY GENERAL DE SOCIEDADES  MERCANTILES.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_del_instituto_mexicano_del_seguro_social" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DEL IMSS.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_del_servicio_de_administracion_tribunaria" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DEL SAT.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_general_de_organismos_auxiliares_de_credito" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY GENERAL DE ORGANISMOS AUXILIARES DE CREDITO.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_de_la_comision_nacional_bancaria_de_valores" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DE LA COMISION NACIONAL BANCARIA Y DE VALORES.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_de_impuestos_especial_sobre_produccion_y_servicios" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DEL IMPUESTO ESPECIAL SOBRE PRODUCCION Y SERVICIOS.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_de_ingresos_de_la_federeacion_para_el_ejercicio_fiscal" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DE INGRESOS DE LA FEDERACION PARA EL EJERCICIO FISCAL DE 2018.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="ley_federal_para_prevencion_e_identificacion_de_operaciones_con_recursos_de_procedencia_ilicita" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LEY DE PREVENCION DEL LAVADO DE DINERO.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="codigo_financiero_2018" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/CODIGO FINANCIERO.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="codigo_civil_el_d_f_2018" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/CODIGO CIVIL DEL D.F.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="codigo_civil_federa_2018" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/CODIGO CIVIL FEDERAL.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="codigo_de_comercio_2018" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/CODIGO DE COMERCIO.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="codigo_fiscal_de_la_federacion_2018" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/CODIGO FISCAL DE LA FEDERACION.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="la_constitucion_politica_de_los_estados_unidos_mexicanos_2018" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/LA CONSTITUCION  POLITICA DE LOS ESTADOS UNIDOS MEXICANOS.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
          <div id="presupuesto_de_egresos_de_federacion_para_el_ejercicio_fiscal" class="tab-pane fade">
            <div class="row" style="width: 1585px;">
              <iframe src = 'leyes/leyes 2018/CODIGO FISCAL DE LA FEDERACION.htm' width = '100%' height = '1000px' frameborder = '0' scrolling = 'none'></iframe>
            </div>
          </div>
        </div> 
      </div>
      </div>
    </div>
  </div>

	<?php include 'footer2.html'; ?>

</body>
</html>