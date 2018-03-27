<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
     $sumartoria3= $datos[12]['ponderacion_respuesta']+$datos[13]['ponderacion_respuesta']+
             $datos[14]['ponderacion_respuesta']+$datos[15]['ponderacion_respuesta']+
             $datos[16]['ponderacion_respuesta']+$datos[17]['ponderacion_respuesta'];
?>
 <?php
      $total3=$sumartoria3/72;
  ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[12]['ponderacion_respuesta'], "label" => $datos[12]['indicador_decripcion'].' '.utf8_encode($datos[12]['descripcionrespuesta'])),
              array("y" => $datos[13]['ponderacion_respuesta'], "label" => $datos[13]['indicador_decripcion'].' '.utf8_encode($datos[13]['descripcionrespuesta'])),
              array("y" => $datos[14]['ponderacion_respuesta'], "label" => $datos[14]['indicador_decripcion'].' '.utf8_encode($datos[14]['descripcionrespuesta'])),
              array("y" => $datos[15]['ponderacion_respuesta'], "label" => $datos[15]['indicador_decripcion'].' '.utf8_encode($datos[15]['descripcionrespuesta'])),
              array("y" => $datos[16]['ponderacion_respuesta'], "label" => $datos[16]['indicador_decripcion'].' '.utf8_encode($datos[16]['descripcionrespuesta'])),
              array("y" => $datos[17]['ponderacion_respuesta'], "label" => $datos[17]['indicador_decripcion'].' '.utf8_encode($datos[17]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[2]['NOMBREITEM']) ?> <?php echo round($total3*100),'%' ?>"
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
