<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria13= $datos[60]['ponderacion_respuesta']+$datos[61]['ponderacion_respuesta']+
       $datos[62]['ponderacion_respuesta']+$datos[63]['ponderacion_respuesta']+
       $datos[64]['ponderacion_respuesta']+$datos[65]['ponderacion_respuesta'];
 ?>
 <?php
 $total13=$sumartoria13/72;
  ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[60]['ponderacion_respuesta'], "label" => $datos[60]['indicador_decripcion'].' '.utf8_encode($datos[60]['descripcionrespuesta'])),
              array("y" => $datos[61]['ponderacion_respuesta'], "label" => $datos[61]['indicador_decripcion'].' '.utf8_encode($datos[61]['descripcionrespuesta'])),
              array("y" => $datos[62]['ponderacion_respuesta'], "label" => $datos[62]['indicador_decripcion'].' '.utf8_encode($datos[62]['descripcionrespuesta'])),
              array("y" => $datos[63]['ponderacion_respuesta'], "label" => $datos[63]['indicador_decripcion'].' '.utf8_encode($datos[63]['descripcionrespuesta'])),
              array("y" => $datos[64]['ponderacion_respuesta'], "label" => $datos[64]['indicador_decripcion'].' '.utf8_encode($datos[64]['descripcionrespuesta'])),
              array("y" => $datos[65]['ponderacion_respuesta'], "label" => $datos[65]['indicador_decripcion'].' '.utf8_encode($datos[65]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[12]['NOMBREITEM']) ?> <?php echo round($total13*100),'%' ?>"
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
