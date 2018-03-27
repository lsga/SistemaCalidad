<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria5= $datos[22]['ponderacion_respuesta']+$datos[23]['ponderacion_respuesta']+
        $datos[24]['ponderacion_respuesta']+$datos[25]['ponderacion_respuesta'];
 ?>
 <?php
 $total5=$sumartoria5/48;
  ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[22]['ponderacion_respuesta'], "label" => $datos[22]['indicador_decripcion'].' '.utf8_encode($datos[22]['descripcionrespuesta'])),
              array("y" => $datos[23]['ponderacion_respuesta'], "label" => $datos[23]['indicador_decripcion'].' '.utf8_encode($datos[23]['descripcionrespuesta'])),
              array("y" => $datos[24]['ponderacion_respuesta'], "label" => $datos[24]['indicador_decripcion'].' '.utf8_encode($datos[24]['descripcionrespuesta'])),
              array("y" => $datos[25]['ponderacion_respuesta'], "label" => $datos[25]['indicador_decripcion'].' '.utf8_encode($datos[25]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[4]['NOMBREITEM']) ?> <?php echo round($total5*100),'%' ?>"
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
