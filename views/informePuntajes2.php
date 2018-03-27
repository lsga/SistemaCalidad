<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
     $sumartoria2= $datos[6]['ponderacion_respuesta']+$datos[7]['ponderacion_respuesta']+
             $datos[8]['ponderacion_respuesta']+$datos[9]['ponderacion_respuesta']+
             $datos[10]['ponderacion_respuesta']+$datos[11]['ponderacion_respuesta'];
 ?>
 <?php
      $total2=$sumartoria2/72;
  ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[6]['ponderacion_respuesta'], "label" => $datos[6]['indicador_decripcion'].' '.utf8_encode($datos[6]['descripcionrespuesta'])),
              array("y" => $datos[7]['ponderacion_respuesta'], "label" => $datos[7]['indicador_decripcion'].' '.utf8_encode($datos[7]['descripcionrespuesta'])),
              array("y" => $datos[8]['ponderacion_respuesta'], "label" => $datos[8]['indicador_decripcion'].' '.utf8_encode($datos[8]['descripcionrespuesta'])),
              array("y" => $datos[9]['ponderacion_respuesta'], "label" => $datos[9]['indicador_decripcion'].' '.utf8_encode($datos[9]['descripcionrespuesta'])),
              array("y" => $datos[10]['ponderacion_respuesta'], "label" => $datos[10]['indicador_decripcion'].' '.utf8_encode($datos[10]['descripcionrespuesta'])),
              array("y" => $datos[11]['ponderacion_respuesta'], "label" => $datos[11]['indicador_decripcion'].' '.utf8_encode($datos[11]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[1]['NOMBREITEM']) ?> <?php echo round($total2*100),'%' ?>"
                      },
                      axisY: {
                          title: "Puntos",
                          titleFontColor: "black",
                          labelFontColor: "black",
                          titleFontSize: 20
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
