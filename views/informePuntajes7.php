<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria7= $datos[33]['ponderacion_respuesta']+$datos[34]['ponderacion_respuesta']+
       $datos[35]['ponderacion_respuesta']+$datos[36]['ponderacion_respuesta']+
       $datos[37]['ponderacion_respuesta']+$datos[38]['ponderacion_respuesta'];
?>
 <?php
 $total7=$sumartoria7/72;
 ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[33]['ponderacion_respuesta'], "label" => $datos[33]['indicador_decripcion'].' '.utf8_encode($datos[33]['descripcionrespuesta'])),
              array("y" => $datos[34]['ponderacion_respuesta'], "label" => $datos[34]['indicador_decripcion'].' '.utf8_encode($datos[34]['descripcionrespuesta'])),
              array("y" => $datos[35]['ponderacion_respuesta'], "label" => $datos[35]['indicador_decripcion'].' '.utf8_encode($datos[35]['descripcionrespuesta'])),
              array("y" => $datos[36]['ponderacion_respuesta'], "label" => $datos[36]['indicador_decripcion'].' '.utf8_encode($datos[36]['descripcionrespuesta'])),
              array("y" => $datos[37]['ponderacion_respuesta'], "label" => $datos[37]['indicador_decripcion'].' '.utf8_encode($datos[37]['descripcionrespuesta'])),
              array("y" => $datos[38]['ponderacion_respuesta'], "label" => $datos[38]['indicador_decripcion'].' '.utf8_encode($datos[38]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[6]['NOMBREITEM']) ?> <?php echo round($total7*100),'%' ?>"
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
