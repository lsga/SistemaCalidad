<?php
//session_start();
?>


<!--<input type="button"  name="goback" id="goback" value="goback"  class="btn btn-primary"/> -->
<script type="text/javascript">


   $(document).ready(function() {
        $("#btnGuardarRespuestas").click(function(event) {
        // oculto mensajkes de error


      if (! $("input[name=chk_respuesta]").is(":checked") ) {
         alert("Por favor seleccionar una respuesta");
         return false;

         }

        if(document.getElementById('txtevidencia').value == '')
        {
            alert("El campo descripcion evidencia no debe estar vacio");
            $("label#txtevidencia").show();
            $("input#txtevidencia").focus();
            return false;
        }
        if ($("#txt_evidenciapdf_existe").val() == '')
            {
                    if (document.getElementById('txt_evidenciapdf').value == '' )
                    {
                            alert("Debe subir el archivo de la evidencia.");
                            document.getElementById('txt_evidenciapdf').focus();
                            $("label#txt_escrituraspdf_error").show();
                            return false;
                    }
            }

        // enviamos los datos para guardar si estan correctos

        guardarDatoRespuesta();
    });

        $("#btnGuardarComentario").click(function(event) {

         guardarDatoRespuesta();

         });

});



  function guardarDatoRespuesta()
        {


           if (!(document.getElementById('txt_evidenciapdf') === null ))
            {
                var archivo = document.getElementById('txt_evidenciapdf');
                var file_evidencia = archivo.files[0];
            }else{
                var file_evidencia = null;
            }
            //Construimos la variable que se guardará en el data del Ajax para pasar al archivo php que procesará los datos
            var data = new FormData();
            var resultado = '';

           $.each($("input[name='chk_respuesta']:checked"), function(){
                  data.append('chk_respuesta',$(this).val());
            });
            data.append('archivo_evidencia',file_evidencia);
            data.append('id_pregunta',$('#id_pregunta').val());
            data.append('txtevidencia',$('#txtevidencia').val());
            data.append('txtComentario',$('#txtComentario').val());
            data.append('txtobservaciones',$('#txtobservaciones').val());


            var url="../controller/preguntaGuardarController.php";
            $.ajax({
                    url:url,
                    type:'POST',
                    contentType:false,
                    data:data,
                    processData:false,
                    cache:false,
                    success:function(msg) {
                        //alert(msg);
                        $("#idBar1").val('30');
			resultado = msg.split("&");

//                         if (resultado[1] == 1)
//                        {
//                            $('#txt_informejuridicopdf_existe').val(resultado[1]);
//                            $('#idArchivoInforme').html('<a href="../files/escritura_'+$('#txtpred_id').val()+'.pdf" target="_blank"  ></a>');
//                        }

                        $('#messageAT').html("<h2>Los datos han sido guardados correctamente!</h2>")
                        .fadeOut(5000, function() {

                        })
                    },
                    error: function(msg) {
                        $('#messageAT').html("<h2>Error!</h2>"+resultado[0])}
            });
        }





</script>




<?php
session_start();
if($_SESSION['rol'] == 1){
    $editarCom = " readonly='true'";
    $editar = "";
}
else{
    $editarCom = "";
    $editar = "  disabled='disabled'";
}


$idIndicador = $_GET['idindicador'];


require_once dirname(dirname(__FILE__)).'/controller/preguntaController.php';
require_once dirname(dirname(__FILE__)).'/controller/EvidenciaController.php';
require_once dirname(dirname(__FILE__)).'/controller/ambito_controller.php';
require_once dirname(dirname(__FILE__)).'/controller/preguntaGuardarController.php';



$tablaPregunta ='';
$tablaRespuesta ='';
foreach ($datos as $key => $value) {
    $checked="";
    if($key == 0)
        $tablaPregunta .="<tr>
            <input type='hidden' name='id_pregunta'  id='id_pregunta' value='".$datos[$key]['id_pregunta']."'>
                <td>".utf8_encode($datos[$key]['nombrepregunta'])."</td>
                </td>
            </tr>";
    if ($datos[$key]['id_respuesta_pregunta'] > 0)
        $checked="checked";
        $tablaRespuesta .="
            <div style='text-align: center; width: 100%'>
            <tr>
                <td width='10%'> <input type='radio' id ='chk_respuesta'  name='chk_respuesta'  value='".$datos[$key]['id_respuesta']."' ".$checked." ".$editar."></td>
                <td>".utf8_encode($datos[$key]['descripcionrespuesta'])."</td>
                </td>
            </tr>
            </div>" ;
}




?>

  <BR>
  <BR>

    <div id='messageAT'></div>
    <table width="100%" class="TableDatos">
        <thead>
            <tr class="fondoTextoTitulo">
            <td>Pregunta</td>
            </tr>
        </thead>
        <tbody>
            <?php echo $tablaPregunta?>
        </tbody>
    </table>
<BR>

    <table width="100%" class="TableDatos">
        <thead>
            <tr class="fondoTextoTitulo">
                <td colspan="2">Respuesta</td>
             </tr>
        </thead>
        <tbody>
            <?php echo $tablaRespuesta?>
        </tbody>
    </table>



<?php require_once dirname(dirname(__FILE__)).'/controller/resumenEvaluacionController.php'; ?>
<form name="frmIngresoRespuestas" action="" method="post"  enctype="multipart/form-data">

    <div id='messageAT'></div>
    <table width="100%" class="TableDatos">
        <input type="hidden" name="id_indicador" id="id_indicador" value="<?php echo $_GET['idindicador']; ?>" readonly="readonly"/>

         <thead>
            <tr class="fondoTextoTitulo">
            <td>Evidencias</td>
             <td>Archivo</td>

            </tr>
        </thead>
        <tbody>
      <tr>
                       <td><input type="text" name="txtevidencia" id="txtevidencia" value="<?php echo utf8_encode($value["descripcionevidencia"]); ?>" <?php echo $editar;?>/>
                       	<td>

                            <input type="hidden" name="txt_evidenciapdf_existe" id="txt_evidenciapdf_existe" value="<?php echo $value["evidencia"];?>" readonly="readonly">
                            <div class="col-lg-1" id="idArchivoInforme">
				<?php   if ($value["evidencia"] != '') echo '<a href="../'.$value["evidencia"].'" target="_blank"  ><img src="../img/pdf.jpg"></a>'; ?>
                            </div>
                            <br>
                            <br>

                         <div class="col-lg-2">
                             <input type="file"  name="txt_evidenciapdf" id="txt_evidenciapdf" size="40" accept="application/pdf" <?php echo $editar;?>>
                         </div>

                    </tr>






        </tbody>
    </table>


    <table width="100%" class="TableDatos">
        <thead>
            <tr class="fondoTextoTitulo">
                <td colspan="2">Observaciones</td>
             </tr>
        </thead>
        <tbody>

         <td>
             <textarea id="txtobservaciones"  name="txtobservaciones" rows="4"  <?php echo $editar;?> ><?php  echo utf8_encode($value["OBSERVACION"])?> </textarea>

        </tbody>
    </table>


    <table width="100%" class="TableDatos">
        <thead>
            <tr class="fondoTextoTitulo">
                <td colspan="2">Comentarios del facilitador</td>
             </tr>
        </thead>
        <tbody>

         <td>
         <textarea id="txtComentario"  name="txtComentario" rows="4"  <?php echo $editarCom;?> value="<?php echo utf8_encode($value["COMENTARIO"])?>"> </textarea>

        </tbody>
    </table>








<BR>
<br>
<br>
<?php if($_SESSION['rol'] == 1){?>
<input type="button"  name="btnGuardarRespuestas" id="btnGuardarRespuestas" value="Guardar"  class="btn btn-primary"/>
<?php }else{?>
<input type="button"  name="btnGuardarComentario" id="btnGuardarComentario" value="Guardar"  class="btn btn-primary"/>
<?php }?>

</form>
