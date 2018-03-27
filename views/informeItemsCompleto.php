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
    $sumartoria14= $datos[66]['ponderacion_respuesta']+$datos[67]['ponderacion_respuesta']+
           $datos[68]['ponderacion_respuesta']+$datos[69]['ponderacion_respuesta'];
    $sumartoria15= $datos[70]['ponderacion_respuesta']+$datos[71]['ponderacion_respuesta']+
           $datos[72]['ponderacion_respuesta']+$datos[73]['ponderacion_respuesta']+
           $datos[74]['ponderacion_respuesta'];
    $sumartoria16= $datos[75]['ponderacion_respuesta']+$datos[76]['ponderacion_respuesta']+
           $datos[77]['ponderacion_respuesta']+$datos[78]['ponderacion_respuesta'];
 ?>
 <?php
      $total1=$sumartoria1/72;
      $total2=$sumartoria2/72;
      $total3=$sumartoria3/72;
      $total4=$sumartoria4/48;
      $total5=$sumartoria5/48;
      $total6=$sumartoria6/84;
      $total7=$sumartoria7/72;
      $total8=$sumartoria8/36;
      $total9=$sumartoria9/48;
      $total10=$sumartoria10/72;
      $total11=$sumartoria11/48;
      $total12=$sumartoria12/48;
      $total13=$sumartoria13/72;
      $total14=$sumartoria14/48;
      $total15=$sumartoria15/60;
      $total16=$sumartoria16/48;
  ?>

<html>
    <head>
        <title>Informe Items</title>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </head>

    <?php
        $dataPointsBar = array(
            array("y" => round($total16*100),'%', label => utf8_encode($datos4[15]['NOMBREITEM']), color => "#efa827"),
            array("y" => round($total15*100),'%', label => utf8_encode($datos4[14]['NOMBREITEM']), color => "#efa827"),
            array("y" => round($total14*100),'%', label => utf8_encode($datos4[13]['NOMBREITEM']), color => "#efa827"),
            array("y" => round($total13*100),'%', label => utf8_encode($datos4[12]['NOMBREITEM']), color => "#227122"),
            array("y" => round($total12*100),'%', label => utf8_encode($datos4[11]['NOMBREITEM']), color => "#227122"),
            array("y" => round($total11*100),'%', label => utf8_encode($datos4[10]['NOMBREITEM']), color => "#227122"),
            array("y" => round($total10*100),'%', label => utf8_encode($datos4[9]['NOMBREITEM']), color => "#227122"),
            array("y" => round($total9*100),'%', label => utf8_encode($datos4[8]['NOMBREITEM']), color => "#ca0e0e"),
            array("y" => round($total8*100),'%', label => utf8_encode($datos4[7]['NOMBREITEM']), color => "#ca0e0e"),
            array("y" => round($total7*100),'%', label => utf8_encode($datos4[6]['NOMBREITEM']), color => "#ca0e0e"),
            array("y" => round($total6*100),'%', label => utf8_encode($datos4[5]['NOMBREITEM']), color => "#ca0e0e"),
            array("y" => round($total5*100),'%', label => utf8_encode($datos4[4]['NOMBREITEM']), color => "#ca0e0e"),
            array("y" => round($total4*100),'%', label => utf8_encode($datos4[3]['NOMBREITEM']), color => "#2196F3"),
            array("y" => round($total3*100),'%', label => utf8_encode($datos4[2]['NOMBREITEM']), color => "#2196F3"),
            array("y" => round($total2*100),'%', label => utf8_encode($datos4[1]['NOMBREITEM']), color => "#2196F3"),
            array("y" => round($total1*100),'%', label => utf8_encode($datos4[0]['NOMBREITEM']), color => "#2196F3"),
        );
    ?>

    <body>
        <div id="chartContainer" style="height: 100%; width: 100%;"></div>

        <script type="text/javascript">

            $(function () {
                var chart = new CanvasJS.Chart("chartContainer", {
                    theme: "theme4",
                    animationEnabled: true,
                    title: {
                        text: "Informe Final Items"
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
                        type: "bar",
                        indexLabel: "{y}%",
                        indexLabelFontColor: "black",
                        dataPoints: <?php echo json_encode($dataPointsBar, JSON_NUMERIC_CHECK); ?>
                    }
                    ]
                });
                chart.render();
            });
        </script>
    </body>
</html>
