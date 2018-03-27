<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria15= $datos[70]['ponderacion_respuesta']+$datos[71]['ponderacion_respuesta']+
       $datos[72]['ponderacion_respuesta']+$datos[73]['ponderacion_respuesta']+
       $datos[74]['ponderacion_respuesta'];
?>
 <?php
 $total15=$sumartoria15/60;
?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[70]['ponderacion_respuesta'], "label" => $datos[70]['indicador_decripcion'].' '.utf8_encode($datos[70]['descripcionrespuesta'])),
              array("y" => $datos[71]['ponderacion_respuesta'], "label" => $datos[71]['indicador_decripcion'].' '.utf8_encode($datos[71]['descripcionrespuesta'])),
              array("y" => $datos[72]['ponderacion_respuesta'], "label" => $datos[72]['indicador_decripcion'].' '.utf8_encode($datos[72]['descripcionrespuesta'])),
              array("y" => $datos[73]['ponderacion_respuesta'], "label" => $datos[73]['indicador_decripcion'].' '.utf8_encode($datos[73]['descripcionrespuesta'])),
              array("y" => $datos[74]['ponderacion_respuesta'], "label" => $datos[74]['indicador_decripcion'].' '.utf8_encode($datos[74]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[14]['NOMBREITEM']) ?> <?php echo round($total15*100),'%' ?>"
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
