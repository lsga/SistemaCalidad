<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria9= $datos[42]['ponderacion_respuesta']+$datos[43]['ponderacion_respuesta']+
      $datos[44]['ponderacion_respuesta']+$datos[45]['ponderacion_respuesta'];
 ?>
 <?php
 $total9=$sumartoria9/48;
  ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[42]['ponderacion_respuesta'], "label" => $datos[42]['indicador_decripcion'].' '.utf8_encode($datos[42]['descripcionrespuesta'])),
              array("y" => $datos[43]['ponderacion_respuesta'], "label" => $datos[43]['indicador_decripcion'].' '.utf8_encode($datos[43]['descripcionrespuesta'])),
              array("y" => $datos[44]['ponderacion_respuesta'], "label" => $datos[44]['indicador_decripcion'].' '.utf8_encode($datos[44]['descripcionrespuesta'])),
              array("y" => $datos[45]['ponderacion_respuesta'], "label" => $datos[45]['indicador_decripcion'].' '.utf8_encode($datos[45]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[8]['NOMBREITEM']) ?> <?php echo round($total9*100),'%' ?>"
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
