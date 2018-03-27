<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria10= $datos[46]['ponderacion_respuesta']+$datos[47]['ponderacion_respuesta']+
       $datos[48]['ponderacion_respuesta']+$datos[49]['ponderacion_respuesta']+
       $datos[50]['ponderacion_respuesta']+$datos[51]['ponderacion_respuesta'];
$sumartoria11= $datos[52]['ponderacion_respuesta']+$datos[53]['ponderacion_respuesta']+
       $datos[54]['ponderacion_respuesta']+$datos[55]['ponderacion_respuesta'];
$sumartoria12= $datos[56]['ponderacion_respuesta']+$datos[57]['ponderacion_respuesta']+
       $datos[58]['ponderacion_respuesta']+$datos[59]['ponderacion_respuesta'];
$sumartoria13= $datos[60]['ponderacion_respuesta']+$datos[61]['ponderacion_respuesta']+
       $datos[62]['ponderacion_respuesta']+$datos[63]['ponderacion_respuesta']+
       $datos[64]['ponderacion_respuesta']+$datos[65]['ponderacion_respuesta'];
 ?>
 <?php
 $total10=$sumartoria10/72;
 $total11=$sumartoria11/48;
 $total12=$sumartoria12/48;
 $total13=$sumartoria13/72;
  ?>
  <?php
  $ambito3=($total10*$datos4[9]['PonderacionItem'])+($total11*$datos4[10]['PonderacionItem'])+($total12*$datos4[11]['PonderacionItem'])+($total13*$datos4[12]['PonderacionItem']);
  ?>
  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
            array("y" => round($total10*100),'%', label => utf8_encode($datos4[9]['NOMBREITEM'])),
            array("y" => round($total11*100),'%', label => utf8_encode($datos4[10]['NOMBREITEM'])),
            array("y" => round($total12*100),'%', label => utf8_encode($datos4[11]['NOMBREITEM'])),
            array("y" => round($total13*100),'%', label => utf8_encode($datos4[12]['NOMBREITEM']))
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
                        text: "<?php echo utf8_encode($datos1[2]['NOMBREAMBITO']) ?> <?php echo round($ambito3*100),'%' ?>"
                    },
                    axisY: {
                        title: "Porcentajes",
                        titleFontColor: "black",
                        labelFontColor: "black",
                        titleFontSize: 20
                    },
                    axisX: {
                        interval: 1,
                        title: "Items",
                        titleFontColor: "black",
                        labelFontSize: 15,
                        labelAngle: 0,
                        labelFontColor: "black"
                    },
                    data: [
                    {
                        type: "column",
                        indexLabel: "{y}%",
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
