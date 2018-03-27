<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
     $sumartoria4= $datos[18]['ponderacion_respuesta']+$datos[19]['ponderacion_respuesta']+
             $datos[20]['ponderacion_respuesta']+$datos[21]['ponderacion_respuesta'];
 ?>
 <?php
      $total4=$sumartoria4/48;
  ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[18]['ponderacion_respuesta'], "label" => $datos[18]['indicador_decripcion'].' '.utf8_encode($datos[18]['descripcionrespuesta'])),
              array("y" => $datos[19]['ponderacion_respuesta'], "label" => $datos[19]['indicador_decripcion'].' '.utf8_encode($datos[19]['descripcionrespuesta'])),
              array("y" => $datos[20]['ponderacion_respuesta'], "label" => $datos[20]['indicador_decripcion'].' '.utf8_encode($datos[20]['descripcionrespuesta'])),
              array("y" => $datos[21]['ponderacion_respuesta'], "label" => $datos[21]['indicador_decripcion'].' '.utf8_encode($datos[21]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[3]['NOMBREITEM']) ?> <?php echo round($total4*100),'%' ?>"
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
