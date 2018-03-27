<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
     $sumartoria1= $datos[0]['ponderacion_respuesta']+$datos[1]['ponderacion_respuesta']+
             $datos[2]['ponderacion_respuesta']+$datos[3]['ponderacion_respuesta']+
             $datos[4]['ponderacion_respuesta']+$datos[5]['ponderacion_respuesta'];
 ?>
 <?php
      $total1=$sumartoria1/72;
  ?>
  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[0]['ponderacion_respuesta'], "label" => $datos[0]['indicador_decripcion'].' '.utf8_encode($datos[0]['descripcionrespuesta'])),
              array("y" => $datos[1]['ponderacion_respuesta'], "label" => $datos[1]['indicador_decripcion'].' '.utf8_encode($datos[1]['descripcionrespuesta'])),
              array("y" => $datos[2]['ponderacion_respuesta'], "label" => $datos[2]['indicador_decripcion'].' '.utf8_encode($datos[2]['descripcionrespuesta'])),
              array("y" => $datos[3]['ponderacion_respuesta'], "label" => $datos[3]['indicador_decripcion'].' '.utf8_encode($datos[3]['descripcionrespuesta'])),
              array("y" => $datos[4]['ponderacion_respuesta'], "label" => $datos[4]['indicador_decripcion'].' '.utf8_encode($datos[4]['descripcionrespuesta'])),
              array("y" => $datos[5]['ponderacion_respuesta'], "label" => $datos[5]['indicador_decripcion'].' '.utf8_encode($datos[5]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[0]['NOMBREITEM']) ?> <?php echo round($total1*100),'%' ?>"
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
