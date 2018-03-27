<?php
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
?>
<?php
     $sumartoria1= $datos[0]['ponderacion_respuesta']+$datos[1]['ponderacion_respuesta']+
             $datos[2]['ponderacion_respuesta']+$datos[3]['ponderacion_respuesta']+
             $datos[4]['ponderacion_respuesta']+$datos[5]['ponderacion_respuesta'];
     $sumartoria2= $datos[6]['ponderacion_respuesta']+$datos[7]['ponderacion_respuesta']+
             $datos[8]['ponderacion_respuesta']+$datos[9]['ponderacion_respuesta']+
             $datos[10]['ponderacion_respuesta']+$datos[11]['ponderacion_respuesta'];
     $sumartoria3= $datos[12]['ponderacion_respuesta']+$datos[13]['ponderacion_respuesta']+
             $datos[14]['ponderacion_respuesta']+$datos[15]['ponderacion_respuesta']+
             $datos[16]['ponderacion_respuesta']+$datos[17]['ponderacion_respuesta'];
     $sumartoria4= $datos[18]['ponderacion_respuesta']+$datos[19]['ponderacion_respuesta']+
             $datos[20]['ponderacion_respuesta']+$datos[21]['ponderacion_respuesta'];
 ?>
 <?php
      $total1=$sumartoria1/72;
      $total2=$sumartoria2/72;
      $total3=$sumartoria3/72;
      $total4=$sumartoria4/48;
  ?>
  <?php
  $ambito1=($total1*$datos4[0]['PonderacionItem'])+($total2*$datos4[1]['PonderacionItem'])+($total3*$datos4[2]['PonderacionItem'])+($total4*$datos4[3]['PonderacionItem']);
  ?>
  <html>
      <head>
          <title>Informe</title>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </head>

      <?php
          $dataPoints = array(
            array("y" => round($total1*100),'%', label => utf8_encode($datos4[0]['NOMBREITEM'])),
            array("y" => round($total2*100),'%', label => utf8_encode($datos4[1]['NOMBREITEM'])),
            array("y" => round($total3*100),'%', label => utf8_encode($datos4[2]['NOMBREITEM'])),
            array("y" => round($total4*100),'%', label => utf8_encode($datos4[3]['NOMBREITEM']))
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
                        text: "<?php echo utf8_encode($datos1[0]['NOMBREAMBITO']) ?> <?php echo round($ambito1*100),'%' ?>"
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
