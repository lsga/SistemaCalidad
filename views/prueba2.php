<?php


$idPregunta = $_GET['idPregunta'];
$idIndicador = $_GET['id_indicador'];
$idAmbito = $_GET['ID_AMBITO'];
$idAmbito = $_GET['ID_ITEM'];
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';

$tablaPregunta ='';

$tablaRespuesta ='';



/*foreach ($datos as $key => $value) {

       if($datos[$key]['ID_ITEM'] >= 1 & $datos[$key]['ID_ITEM'] <=4 ){
        $tablaItem1 .='  <tr>
             <td></td>
                <td>'.$datos[$key]['NOMBREITEM'].'</td>
            </tr>';
          }
        if($datos[$key]['id_indicador'] >= 7 & $datos[$key]['id_indicador'] <=12 ){
          $tablaRespuesta2 .='  <tr>
             <td></td>
                <td>'.$datos[$key]['indicador_decripcion'].'</td>
                <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
                <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
                <td>'.$datos[$key]['descripcionevidencia'].'</td>
                <td>'.$datos[$key]['observacion'].'</td>
                <td>'.$datos[$key]['comentario'].'</td>


            </tr>';
          }

}*/
















/*$tablaRespuesta ='';
foreach ($datos as $key => $value) {

        $tablaRespuesta .='   <tr>
                <td> </td>
                <td>'.$datos[$key]['indicador_decripcion'].'</td>
                <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
                <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
                <td>'.$datos[$key]['descripcionevidencia'].'</td>
                <td>'.$datos[$key]['observacion'].'</td>
                <td>'.$datos[$key]['comentario'].'</td>

            </tr>';


} */



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

  <?php
       $ambito1=($total1*$datos4[0]['PonderacionItem'])+($total2*$datos4[1]['PonderacionItem'])+($total3*$datos4[2]['PonderacionItem'])+($total4*$datos4[3]['PonderacionItem']);
       $ambito2=($total5*$datos4[4]['PonderacionItem'])+($total6*$datos4[5]['PonderacionItem'])+($total7*$datos4[6]['PonderacionItem'])+($total8*$datos4[7]['PonderacionItem'])+($total9*$datos4[8]['PonderacionItem']);
       $ambito3=($total10*$datos4[9]['PonderacionItem'])+($total11*$datos4[10]['PonderacionItem'])+($total12*$datos4[11]['PonderacionItem'])+($total13*$datos4[12]['PonderacionItem']);
       $ambito4=($total14*$datos4[13]['PonderacionItem'])+($total15*$datos4[14]['PonderacionItem'])+($total16*$datos4[15]['PonderacionItem']);
   ?>
   <?php
        $puntajeFinal=($ambito1*$datos1[0]['PonderacionAmbito'])+($ambito2*$datos1[1]['PonderacionAmbito'])+($ambito3*$datos1[2]['PonderacionAmbito'])+($ambito4*$datos1[3]['PonderacionAmbito']);
    ?>
    <head>
    <script>
    function graficoItemsCompleto() {
        window.open("../views/informeItemsCompleto.php");
    }
    function graficoAmbitos() {
        window.open("../views/informeAmbitos.php");
    }
    function graficoItemsAmbito1() {
        window.open("../views/informeItemsAmbito1.php");
    }
    function graficoItemsAmbito2() {
        window.open("../views/informeItemsAmbito2.php");
    }
    function graficoItemsAmbito3() {
        window.open("../views/informeItemsAmbito3.php");
    }
    function graficoItemsAmbito4() {
        window.open("../views/informeItemsAmbito4.php");
    }
    function graficoPuntajeItem1() {
        window.open("../views/informePuntajes1.php");
    }
    function graficoPuntajeItem2() {
        window.open("../views/informePuntajes2.php");
    }
    function graficoPuntajeItem3() {
        window.open("../views/informePuntajes3.php");
    }
    function graficoPuntajeItem4() {
        window.open("../views/informePuntajes4.php");
    }
    function graficoPuntajeItem5() {
        window.open("../views/informePuntajes5.php");
    }
    function graficoPuntajeItem6() {
        window.open("../views/informePuntajes6.php");
    }
    function graficoPuntajeItem7() {
        window.open("../views/informePuntajes7.php");
    }
    function graficoPuntajeItem8() {
        window.open("../views/informePuntajes8.php");
    }
    function graficoPuntajeItem9() {
        window.open("../views/informePuntajes9.php");
    }
    function graficoPuntajeItem10() {
        window.open("../views/informePuntajes10.php");
    }
    function graficoPuntajeItem11() {
        window.open("../views/informePuntajes11.php");
    }
    function graficoPuntajeItem12() {
        window.open("../views/informePuntajes12.php");
    }
    function graficoPuntajeItem13() {
        window.open("../views/informePuntajes13.php");
    }
    function graficoPuntajeItem14() {
        window.open("../views/informePuntajes14.php");
    }
    function graficoPuntajeItem15() {
        window.open("../views/informePuntajes15.php");
    }
    function graficoPuntajeItem16() {
        window.open("../views/informePuntajes16.php");
    }
    </script>
  </head>
<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <div id='messageAT'></div>
    <h3><?php echo utf8_encode($datos1[0]['NOMBREAMBITO']); ?> <!--(<?php echo round($datos1[0]['PonderacionAmbito']*100),'%';    ?>)--></h3>
    <table width="100%" class="TableDatos">
        <thead>
            <tr class="fondoTextoTitulo">
                <td>Item</td>
                <td>Resultado</td>
                <td>Puntaje</td>
                <td>Graficos</td>
             </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[0]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria1;    ?> puntos (de 72 en total)
            </td>
            <td>
               <?php echo round($total1*100),'%';    ?> (ponderacion de <?php echo $datos4[0]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem1()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[1]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria2;    ?> puntos (de 72 en total)
            </td>
            <td>
               <?php echo round($total2*100),'%';    ?> (ponderacion de <?php echo $datos4[1]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem2()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[2]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria3;    ?> puntos (de 72 en total)
            </td>
            <td>
               <?php echo round($total3*100),'%';    ?> (ponderacion de <?php echo $datos4[2]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem3()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[3]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria4;    ?> puntos (de 48 en total)
            </td>
            <td>
               <?php echo round($total4*100),'%';    ?> (ponderacion de <?php echo $datos4[3]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem4()">
            </td>
          </tr>
        </tbody>
        <thead>
          <tr class="fondoTextoTitulo">
              <td style="border:none;"></td>
              <td style="border:none;"></td>
              <td style="border:none;" colspan="2">Porcentaje de logro del ámbito: <?php echo round($ambito1*100),'%' ; ?> </td>
        </thead>
    </table>
    <input type="button" value="Ver Grafico" onclick="graficoItemsAmbito1()">
</form>

<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <div id='messageAT'></div>
    <h3><?php echo utf8_encode($datos1[1]['NOMBREAMBITO']); ?> <!--(<?php echo round($datos1[1]['PonderacionAmbito']*100),'%';    ?>)--></h3>
    <table width="100%" class="TableDatos">
        <thead>
            <tr class="fondoTextoTitulo">
                <td>Item</td>
                <td>Resultado</td>
                <td>Puntaje</td>
                <td>Graficos</td>
             </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[4]['NOMBREITEM']);
              ?>
            </td>
            <td>
              <?php

               ?>
               <?php echo $sumartoria5;    ?> puntos (de 48 en total)
            </td>
            <td>
              <?php

               ?>
               <?php echo round($total5*100),'%';    ?> (ponderacion de <?php echo $datos4[4]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem5()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[5]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria6;    ?> puntos (de 84 en total)
            </td>
            <td>
               <?php echo round($total6*100),'%';    ?> (ponderacion de <?php echo $datos4[5]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem6()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[6]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria7;    ?> puntos (de 72 en total)
            </td>
            <td>
               <?php echo round($total7*100),'%';    ?> (ponderacion de <?php echo $datos4[6]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem7()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[7]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria8;    ?> puntos (de 36 en total)
            </td>
            <td>
               <?php echo round($total8*100),'%';    ?> (ponderacion de <?php echo $datos4[7]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem8()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[8]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria9;    ?> puntos (de 48 en total)
            </td>
            <td>
               <?php echo round($total9*100),'%';    ?> (ponderacion de <?php echo $datos4[8]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem9()">
            </td>
          </tr>
        </tbody>
        <thead>
          <tr class="fondoTextoTitulo">
              <td style="border:none;"></td>
              <td style="border:none;"></td>
              <td style="border:none;" colspan="2">Porcentaje de logro del ámbito: <?php echo round($ambito2*100),'%' ; ?> </td>
        </thead>
    </table>
    <input type="button" value="Ver Grafico" onclick="graficoItemsAmbito2()">
</form>

<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <div id='messageAT'></div>
    <h3><?php echo utf8_encode($datos1[2]['NOMBREAMBITO']); ?> <!--(<?php echo round($datos1[2]['PonderacionAmbito']*100),'%';    ?>)--></h3>
    <table width="100%" class="TableDatos">
        <thead>
            <tr class="fondoTextoTitulo">
                <td>Item</td>
                <td>Resultado</td>
                <td>Puntaje</td>
                <td>Graficos</td>
             </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[9]['NOMBREITEM']);
              ?>
            </td>
            <td>
              <?php

               ?>
               <?php echo $sumartoria10;    ?> puntos (de 72 en total)
            </td>
            <td>
              <?php

               ?>
               <?php echo round($total10*100),'%';    ?> (ponderacion de <?php echo $datos4[9]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem10()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[10]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria11;    ?> puntos (de 48 en total)
            </td>
            <td>
               <?php echo round($total11*100),'%';    ?> (ponderacion de <?php echo $datos4[10]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem11()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[11]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria12;    ?> puntos (de 48 en total)
            </td>
            <td>
               <?php echo round($total12*100),'%';    ?> (ponderacion de <?php echo $datos4[11]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem12()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[12]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria13;    ?> puntos (de 72 en total)
            </td>
            <td>
               <?php echo round($total13*100),'%';    ?> (ponderacion de <?php echo $datos4[12]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem13()">
            </td>
          </tr>
        </tbody>
        <thead>
          <tr class="fondoTextoTitulo">
              <td style="border:none;"></td>
              <td style="border:none;"></td>
              <td style="border:none;" colspan="2">Porcentaje de logro del ámbito: <?php echo round($ambito3*100),'%' ; ?> </td>
        </thead>
    </table>
    <input type="button" value="Ver Grafico" onclick="graficoItemsAmbito3()">
</form>

<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <div id='messageAT'></div>
    <h3><?php echo utf8_encode($datos1[3]['NOMBREAMBITO']); ?> <!--(<?php echo round($datos1[3]['PonderacionAmbito']*100),'%';    ?>)--></h3>
    <table width="100%" class="TableDatos">
        <thead>
            <tr class="fondoTextoTitulo">
                <td>Item</td>
                <td>Resultado</td>
                <td>Puntaje</td>
                <td>Graficos</td>
             </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[13]['NOMBREITEM']);
              ?>
            </td>
            <td>
              <?php

               ?>
               <?php echo $sumartoria14;    ?> puntos (de 48 en total)
            </td>
            <td>
              <?php

               ?>
               <?php echo round($total14*100),'%';    ?> (ponderacion de <?php echo $datos4[13]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem14()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[14]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria15;    ?> puntos (de 60 en total)
            </td>
            <td>
               <?php echo round($total15*100),'%';    ?> (ponderacion de <?php echo $datos4[14]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem15()">
            </td>
          </tr>
          <tr>
            <td>
              <?php
                    echo utf8_encode($datos4[15]['NOMBREITEM']);
              ?>
            </td>
            <td>
               <?php echo $sumartoria16;    ?> puntos (de 48 en total)
            </td>
            <td>
               <?php echo round($total16*100),'%';    ?> (ponderacion de <?php echo $datos4[15]['PonderacionItem']; ?>)
            </td>
            <td>
               <input type="button" value="Ver Grafico" onclick="graficoPuntajeItem16()">
            </td>
          </tr>
        </tbody>
        <thead>
          <tr class="fondoTextoTitulo">
              <td style="border:none;"></td>
              <td style="border:none;"></td>
              <td style="border:none;" colspan="2">Porcentaje de logro del ámbito: <?php echo round($ambito4*100),'%' ; ?> </td>
        </thead>
    </table>
    <input type="button" value="Ver Grafico" onclick="graficoItemsAmbito4()">
</form>

<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
  <h3 style="float:right;">Puntaje Final <span class="label label-info"><?php echo round($puntajeFinal*100),'%' ; ?></span></h3>
  <input type="button" value="Grafico Items Completo" onclick="graficoItemsCompleto()">
  <input type="button" value="Grafico Ambitos" onclick="graficoAmbitos()">
</form>
