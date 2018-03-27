<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria11= $datos[52]['ponderacion_respuesta']+$datos[53]['ponderacion_respuesta']+
       $datos[54]['ponderacion_respuesta']+$datos[55]['ponderacion_respuesta'];
?>
 <?php
 $total11=$sumartoria11/48;
?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[52]['ponderacion_respuesta'], "label" => $datos[52]['indicador_decripcion'].' '.utf8_encode($datos[52]['descripcionrespuesta'])),
              array("y" => $datos[53]['ponderacion_respuesta'], "label" => $datos[53]['indicador_decripcion'].' '.utf8_encode($datos[53]['descripcionrespuesta'])),
              array("y" => $datos[54]['ponderacion_respuesta'], "label" => $datos[54]['indicador_decripcion'].' '.utf8_encode($datos[54]['descripcionrespuesta'])),
              array("y" => $datos[55]['ponderacion_respuesta'], "label" => $datos[55]['indicador_decripcion'].' '.utf8_encode($datos[55]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[10]['NOMBREITEM']) ?> <?php echo round($total11*100),'%' ?>"
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
