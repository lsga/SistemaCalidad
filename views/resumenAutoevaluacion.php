<?php


$idPregunta = $_GET['idPregunta'];
require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php';
require_once dirname(dirname(__FILE__)).'/controller/item_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
$tablaPregunta ='';

$tablaRespuesta ='';




foreach ($datos as $key => $value) {

       if($datos[$key]['id_indicador'] >= 1 & $datos[$key]['id_indicador'] <=6 ){
        $tablaRespuesta1 .='  <tr>
             <td></td>
                <td>'.$datos[$key]['indicador_decripcion'].'</td>
                <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
                <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
                <td>'.$datos[$key]['descripcionevidencia'].'</td>
                <td>'.$datos[$key]['observacion'].'</td>
                <td>'.$datos[$key]['comentario'].'</td>


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
      if($datos[$key]['id_indicador'] >= 13 & $datos[$key]['id_indicador'] <=18 ){
        $tablaRespuesta3 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 19 & $datos[$key]['id_indicador'] <=22 ){
        $tablaRespuesta4 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 23 & $datos[$key]['id_indicador'] <=26 ){
        $tablaRespuesta5 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 27 & $datos[$key]['id_indicador'] <=33 ){
        $tablaRespuesta6 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 34 & $datos[$key]['id_indicador'] <=39 ){
        $tablaRespuesta7 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 40 & $datos[$key]['id_indicador'] <=42 ){
        $tablaRespuesta8 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 43 & $datos[$key]['id_indicador'] <=46 ){
        $tablaRespuesta9 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 47 & $datos[$key]['id_indicador'] <=52 ){
        $tablaRespuesta10 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 53 & $datos[$key]['id_indicador'] <=56 ){
        $tablaRespuesta11 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 57 & $datos[$key]['id_indicador'] <=60 ){
        $tablaRespuesta12 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 61 & $datos[$key]['id_indicador'] <=66 ){
        $tablaRespuesta13 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 67 & $datos[$key]['id_indicador'] <=70 ){
        $tablaRespuesta14 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 71 & $datos[$key]['id_indicador'] <=75 ){
        $tablaRespuesta15 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
      if($datos[$key]['id_indicador'] >= 76 & $datos[$key]['id_indicador'] <=79 ){
        $tablaRespuesta16 .='  <tr>

           <td></td>
              <td>'.$datos[$key]['indicador_decripcion'].'</td>
              <td>'.$datos[$key]['ponderacion_respuesta'].'</td>
              <td><a href="../'.$datos[0]['evidencia'].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'.$datos[$key]['evidencia'].'</td>
              <td>'.$datos[$key]['descripcionevidencia'].'</td>
              <td>'.$datos[$key]['observacion'].'</td>
              <td>'.$datos[$key]['comentario'].'</td>


          </tr>';
      }
}

       /*foreach ($datos as $key => $value) {

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


$total1= $datos[0]['ponderacion_respuesta']+$datos[1]['ponderacion_respuesta']+
         $datos[2]['ponderacion_respuesta']+$datos[3]['ponderacion_respuesta']+
         $datos[4]['ponderacion_respuesta']+$datos[5]['ponderacion_respuesta'];
$total2= $datos[6]['ponderacion_respuesta']+$datos[7]['ponderacion_respuesta']+
         $datos[8]['ponderacion_respuesta']+$datos[9]['ponderacion_respuesta']+
         $datos[10]['ponderacion_respuesta']+$datos[11]['ponderacion_respuesta'];
$total3= $datos[12]['ponderacion_respuesta']+$datos[13]['ponderacion_respuesta']+
         $datos[14]['ponderacion_respuesta']+$datos[15]['ponderacion_respuesta']+
         $datos[16]['ponderacion_respuesta']+$datos[17]['ponderacion_respuesta'];
$total4= $datos[18]['ponderacion_respuesta']+$datos[19]['ponderacion_respuesta']+
         $datos[20]['ponderacion_respuesta']+$datos[21]['ponderacion_respuesta'];
$total5= $datos[22]['ponderacion_respuesta']+$datos[23]['ponderacion_respuesta']+
         $datos[24]['ponderacion_respuesta']+$datos[25]['ponderacion_respuesta'];
$total6= $datos[26]['ponderacion_respuesta']+$datos[27]['ponderacion_respuesta']+
         $datos[28]['ponderacion_respuesta']+$datos[29]['ponderacion_respuesta']+
         $datos[30]['ponderacion_respuesta']+$datos[31]['ponderacion_respuesta']+
         $datos[32]['ponderacion_respuesta'];
$total7= $datos[33]['ponderacion_respuesta']+$datos[34]['ponderacion_respuesta']+
         $datos[35]['ponderacion_respuesta']+$datos[36]['ponderacion_respuesta']+
         $datos[37]['ponderacion_respuesta']+$datos[38]['ponderacion_respuesta'];
$total8= $datos[39]['ponderacion_respuesta']+$datos[40]['ponderacion_respuesta']+
         $datos[41]['ponderacion_respuesta'];
$total9= $datos[42]['ponderacion_respuesta']+$datos[43]['ponderacion_respuesta']+
         $datos[44]['ponderacion_respuesta']+$datos[45]['ponderacion_respuesta'];
$total10= $datos[46]['ponderacion_respuesta']+$datos[47]['ponderacion_respuesta']+
          $datos[48]['ponderacion_respuesta']+$datos[49]['ponderacion_respuesta']+
          $datos[50]['ponderacion_respuesta']+$datos[51]['ponderacion_respuesta'];
$total11= $datos[52]['ponderacion_respuesta']+$datos[53]['ponderacion_respuesta']+
          $datos[54]['ponderacion_respuesta']+$datos[55]['ponderacion_respuesta'];
$total12= $datos[56]['ponderacion_respuesta']+$datos[57]['ponderacion_respuesta']+
          $datos[58]['ponderacion_respuesta']+$datos[59]['ponderacion_respuesta'];
$total13= $datos[60]['ponderacion_respuesta']+$datos[61]['ponderacion_respuesta']+
          $datos[62]['ponderacion_respuesta']+$datos[63]['ponderacion_respuesta']+
          $datos[64]['ponderacion_respuesta']+$datos[65]['ponderacion_respuesta'];
$total14= $datos[66]['ponderacion_respuesta']+$datos[67]['ponderacion_respuesta']+
          $datos[68]['ponderacion_respuesta']+$datos[69]['ponderacion_respuesta'];
$total15= $datos[70]['ponderacion_respuesta']+$datos[71]['ponderacion_respuesta']+
          $datos[72]['ponderacion_respuesta']+$datos[73]['ponderacion_respuesta']+
          $datos[74]['ponderacion_respuesta'];
$total16= $datos[75]['ponderacion_respuesta']+$datos[76]['ponderacion_respuesta']+
          $datos[77]['ponderacion_respuesta']+$datos[78]['ponderacion_respuesta'];

?>

<BR>
<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">

  <h3><?php echo utf8_encode($datos1[0]['NOMBREAMBITO']); ?></h3>
  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[0]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>

              <?php
                    echo $tablaRespuesta1;
               ?>
          </tbody>
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Puntaje Total</td>
                  <td>  <?php echo $total1 ; ?> </td>
           </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[1]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta2;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total2 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[2]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta3;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total3 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[3]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta4;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total4 ; ?> </td>
          </thead>
      </table>
  </form>
</form>
<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
  <h3><?php echo utf8_encode($datos1[1]['NOMBREAMBITO']); ?></h3>
  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[4]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta5;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total5 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[5]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta6;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total6 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
      <h4><?php echo utf8_encode($datos4[6]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta7;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total7 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[7]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta8;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total8 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[8]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta9;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total9 ; ?> </td>
          </thead>
      </table>
  </form>
</form>
<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
  <h3><?php echo utf8_encode($datos1[2]['NOMBREAMBITO']); ?></h3>
  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[9]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta10;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total10 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[10]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta11;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total11 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[11]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta12;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total12 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[12]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta13;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total13 ; ?> </td>
          </thead>
      </table>
  </form>
</form>
<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
  <h3><?php echo utf8_encode($datos1[3]['NOMBREAMBITO']); ?></h3>
  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[13]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta14;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total14 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[14]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta15;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total15 ; ?> </td>
          </thead>
      </table>
  </form>

  <form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">
    <h4><?php echo utf8_encode($datos4[15]['NOMBREITEM']);?></h4>
      <div id='messageAT'></div>
      <table width="100%" class="TableDatos">
          <thead>
              <tr class="fondoTextoTitulo">
                  <td ></td>
                  <td>Indicador</td>
                  <td>Puntaje</td>
                  <td>Evidencia</td>
                  <td>Descripción Evidencia</td>
                  <td>Observaciones</td>
                  <td>Comentarios facilitador</td>
               </tr>
          </thead>
          <tbody>
              <?php
                    echo $tablaRespuesta16;
               ?>
          </tbody>
          <thead>
             <tr class="fondoTextoTitulo">
                 <td ></td>
                 <td>Puntaje Total</td>
                 <td>  <?php echo $total16 ; ?> </td>
          </thead>
      </table>
  </form>
</form>
