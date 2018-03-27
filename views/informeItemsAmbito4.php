<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria14= $datos[66]['ponderacion_respuesta']+$datos[67]['ponderacion_respuesta']+
       $datos[68]['ponderacion_respuesta']+$datos[69]['ponderacion_respuesta'];
$sumartoria15= $datos[70]['ponderacion_respuesta']+$datos[71]['ponderacion_respuesta']+
       $datos[72]['ponderacion_respuesta']+$datos[73]['ponderacion_respuesta']+
       $datos[74]['ponderacion_respuesta'];
$sumartoria16= $datos[75]['ponderacion_respuesta']+$datos[76]['ponderacion_respuesta']+
       $datos[77]['ponderacion_respuesta']+$datos[78]['ponderacion_respuesta'];
 ?>
 <?php
 $total14=$sumartoria14/48;
 $total15=$sumartoria15/60;
 $total16=$sumartoria16/48;
  ?>
<?php
$ambito4=($total14*$datos4[13]['PonderacionItem'])+($total15*$datos4[14]['PonderacionItem'])+($total16*$datos4[15]['PonderacionItem']);
?>
  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
            array("y" => round($total14*100),'%', label => utf8_encode($datos4[13]['NOMBREITEM'])),
            array("y" => round($total15*100),'%', label => utf8_encode($datos4[14]['NOMBREITEM'])),
            array("y" => round($total16*100),'%', label => utf8_encode($datos4[15]['NOMBREITEM']))
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
                        text: "<?php echo utf8_encode($datos1[3]['NOMBREAMBITO']) ?> <?php echo round($ambito4*100),'%' ?>"
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
