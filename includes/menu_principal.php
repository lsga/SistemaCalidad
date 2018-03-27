<script>

function createCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}





function prueba(){
    alert("ooooooo");
    document.forms.formData.action= "../views/macroprocesos.php";
    document.forms.formData.submit();
}


function grabarPeriodo(){
  // alert(document.getElementById('comboPeriodo').value);
   createCookie('id_encuesta',document.getElementById('comboPeriodo').value,1);

}
function validarPeriodo(){

    if( document.getElementById('comboPeriodo').value > 0 )
        {
           // alert('si has escogido una opcion')
           location.href="../views/inicio.php"


        } else
         {
             alert('no has escogido un periodo')
         }

}
function validarPeriodoMinisterio(){

    if( document.getElementById('comboPeriodo').value > 0 )
        {
           // alert('si has escogido una opcion')
           location.href="../views/ministerioEducacion.php"


        } else
         {
             alert('no has escogido un periodo')
         }

}
</script>


<form id="formData" action="">

<?php
require_once dirname(dirname(__FILE__)).'/controller/preguntaGuardarController.php';

echo 'PERIODOS ACADEMICOS';

$tablaE ='';
echo "        <select id='comboPeriodo' onchange='grabarPeriodo()'>";
echo "<option>Elije</option>";

//print_r($datos1);
foreach ($datosE as $key => $value) {

   echo '<option value="'.$datosE[$key]['id_encuesta'].'">';
   echo utf8_encode($datosE[$key]['nombre_encuesta'])."</option>";
}
   echo "         </select>";

?>


</form>




<?php
require("../util/config.php");

	echo '
  <a><button class="btnprincipal" style="vertical-align:middle"  onclick="validarPeriodo()" ><span>SISTEMA DE CALIDAD GESTION ESCOLAR</span></button></a>
  <a href="../views/macroprocesos.php"><button class="btnprincipal" style="vertical-align:middle"><span>MACRO DE PROCESOS INSTITUCIONALES</span></button></a>
  <a><button class="btnprincipal" style="vertical-align:middle"  onclick="validarPeriodoMinisterio()"><span>AUTOEVALUACION MINISTERIO DE EDUCACION</span></button></a>
  <center><a href="'.$path.'/logout.php"><button class="btnprincipal" style="vertical-align:middle"><span>CERRAR</span></button></a></center>
  ';
?>
