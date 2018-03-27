<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria12= $datos[56]['ponderacion_respuesta']+$datos[57]['ponderacion_respuesta']+
       $datos[58]['ponderacion_respuesta']+$datos[59]['ponderacion_respuesta'];
?>
 <?php
 $total12=$sumartoria12/48;
 ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[56]['ponderacion_respuesta'], "label" => $datos[56]['indicador_decripcion'].' '.utf8_encode($datos[56]['descripcionrespuesta'])),
              array("y" => $datos[57]['ponderacion_respuesta'], "label" => $datos[57]['indicador_decripcion'].' '.utf8_encode($datos[57]['descripcionrespuesta'])),
              array("y" => $datos[58]['ponderacion_respuesta'], "label" => $datos[58]['indicador_decripcion'].' '.utf8_encode($datos[58]['descripcionrespuesta'])),
              array("y" => $datos[59]['ponderacion_respuesta'], "label" => $datos[59]['indicador_decripcion'].' '.utf8_encode($datos[59]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[11]['NOMBREITEM']) ?> <?php echo round($total12*100),'%' ?>"
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
