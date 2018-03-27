<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
$sumartoria5= $datos[22]['ponderacion_respuesta']+$datos[23]['ponderacion_respuesta']+
        $datos[24]['ponderacion_respuesta']+$datos[25]['ponderacion_respuesta'];
$sumartoria6= $datos[26]['ponderacion_respuesta']+$datos[27]['ponderacion_respuesta']+
        $datos[28]['ponderacion_respuesta']+$datos[29]['ponderacion_respuesta']+
        $datos[30]['ponderacion_respuesta']+$datos[31]['ponderacion_respuesta']+
        $datos[32]['ponderacion_respuesta'];
$sumartoria7= $datos[33]['ponderacion_respuesta']+$datos[34]['ponderacion_respuesta']+
       $datos[35]['ponderacion_respuesta']+$datos[36]['ponderacion_respuesta']+
       $datos[37]['ponderacion_respuesta']+$datos[38]['ponderacion_respuesta'];
$sumartoria8= $datos[39]['ponderacion_respuesta']+$datos[40]['ponderacion_respuesta']+
       $datos[41]['ponderacion_respuesta'];
$sumartoria9= $datos[42]['ponderacion_respuesta']+$datos[43]['ponderacion_respuesta']+
      $datos[44]['ponderacion_respuesta']+$datos[45]['ponderacion_respuesta'];
 ?>
 <?php
 $total5=$sumartoria5/48;
 $total6=$sumartoria6/84;
 $total7=$sumartoria7/72;
 $total8=$sumartoria8/36;
 $total9=$sumartoria9/48;
  ?>
  <?php
  $ambito2=($total5*$datos4[4]['PonderacionItem'])+($total6*$datos4[5]['PonderacionItem'])+($total7*$datos4[6]['PonderacionItem'])+($total8*$datos4[7]['PonderacionItem'])+($total9*$datos4[8]['PonderacionItem']);
  ?>
  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
            array("y" => round($total5*100),'%', label => utf8_encode($datos4[4]['NOMBREITEM'])),
            array("y" => round($total6*100),'%', label => utf8_encode($datos4[5]['NOMBREITEM'])),
            array("y" => round($total7*100),'%', label => utf8_encode($datos4[6]['NOMBREITEM'])),
            array("y" => round($total8*100),'%', label => utf8_encode($datos4[7]['NOMBREITEM'])),
            array("y" => round($total9*100),'%', label => utf8_encode($datos4[8]['NOMBREITEM']))
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
                        text: "<?php echo utf8_encode($datos1[1]['NOMBREAMBITO']) ?> <?php echo round($ambito2*100),'%' ?>"
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
