<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria6= $datos[26]['ponderacion_respuesta']+$datos[27]['ponderacion_respuesta']+
        $datos[28]['ponderacion_respuesta']+$datos[29]['ponderacion_respuesta']+
        $datos[30]['ponderacion_respuesta']+$datos[31]['ponderacion_respuesta']+
        $datos[32]['ponderacion_respuesta'];
 ?>
 <?php
 $total6=$sumartoria6/84;
 ?>

  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
              array("y" => $datos[26]['ponderacion_respuesta'], "label" => $datos[26]['indicador_decripcion'].' '.utf8_encode($datos[26]['descripcionrespuesta'])),
              array("y" => $datos[27]['ponderacion_respuesta'], "label" => $datos[27]['indicador_decripcion'].' '.utf8_encode($datos[27]['descripcionrespuesta'])),
              array("y" => $datos[28]['ponderacion_respuesta'], "label" => $datos[28]['indicador_decripcion'].' '.utf8_encode($datos[28]['descripcionrespuesta'])),
              array("y" => $datos[29]['ponderacion_respuesta'], "label" => $datos[29]['indicador_decripcion'].' '.utf8_encode($datos[29]['descripcionrespuesta'])),
              array("y" => $datos[30]['ponderacion_respuesta'], "label" => $datos[30]['indicador_decripcion'].' '.utf8_encode($datos[30]['descripcionrespuesta'])),
              array("y" => $datos[31]['ponderacion_respuesta'], "label" => $datos[31]['indicador_decripcion'].' '.utf8_encode($datos[31]['descripcionrespuesta'])),
              array("y" => $datos[32]['ponderacion_respuesta'], "label" => $datos[32]['indicador_decripcion'].' '.utf8_encode($datos[32]['descripcionrespuesta'])),
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
                          text: "<?php echo utf8_encode($datos4[5]['NOMBREITEM']) ?> <?php echo round($total6*100),'%' ?>"
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
