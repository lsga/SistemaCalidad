<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria10= $datos[46]['ponderacion_respuesta']+$datos[47]['ponderacion_respuesta']+
       $datos[48]['ponderacion_respuesta']+$datos[49]['ponderacion_respuesta']+
       $datos[50]['ponderacion_respuesta']+$datos[51]['ponderacion_respuesta'];
 ?>
 <?php
 $total10=$sumartoria10/72;
 ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[46]['ponderacion_respuesta'], "label" => $datos[46]['indicador_decripcion'].' '.utf8_encode($datos[46]['descripcionrespuesta'])),
              array("y" => $datos[47]['ponderacion_respuesta'], "label" => $datos[47]['indicador_decripcion'].' '.utf8_encode($datos[47]['descripcionrespuesta'])),
              array("y" => $datos[48]['ponderacion_respuesta'], "label" => $datos[48]['indicador_decripcion'].' '.utf8_encode($datos[48]['descripcionrespuesta'])),
              array("y" => $datos[49]['ponderacion_respuesta'], "label" => $datos[49]['indicador_decripcion'].' '.utf8_encode($datos[49]['descripcionrespuesta'])),
              array("y" => $datos[50]['ponderacion_respuesta'], "label" => $datos[50]['indicador_decripcion'].' '.utf8_encode($datos[50]['descripcionrespuesta'])),
              array("y" => $datos[51]['ponderacion_respuesta'], "label" => $datos[51]['indicador_decripcion'].' '.utf8_encode($datos[51]['descripcionrespuesta'])),
          );
      ?>

      <body>
          <div id="chartContainer" style="height: 100%; width: 100%;"></div>

          <script type="text/javascript">

              $(function () {
                  var chart = new CanvasJS.Chart("chartContainer", {
                      theme: "theme2",
                      animationEnabled: true,
                      title: {
                          text: "<?php echo utf8_encode($datos4[9]['NOMBREITEM']) ?> <?php echo round($total10*100),'%' ?>"
                      },
                      axisY: {
                          title: "Puntos",
                          titleFontColor: "black",
                          labelFontColor: "black",
                          titleFontSize: 20,
                          interval: 2
                      },
                      axisX: {
                          interval: 1,
                          labelFontSize: 15,
                          labelAngle: 0,
                          labelFontColor: "black"
                      },
                      data: [
                      {
                          type: "column",
                          indexLabel: "{y}",
                          indexLabelFontColor: "black",
                          dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                      }
                      ]
                  });
                  chart.render();
              });
          </script>
      </body>
  </html>
