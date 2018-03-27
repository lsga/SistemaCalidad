	<script>

var selector = '.nav a';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});


</script>


<style>
 a.active {
    color: red;
}
ul#myList a.active{
	color: red;
}
</style>

<?php
session_start();

require_once ('../model/pregunta_model.php');
$config = require_once("../util/config.php");

try {
	if (!isset($db))
		$db = new PDO('mysql:host=localhost;dbname=sistema_calidad', 'root' ,'' );
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


$objProyecto= new pregunta($db);

$datosprocesos = $objProyecto->Procesos();

$datosproceso = $objProyecto->getProceso($_GET['idComponente']);

$datoelemento = $objProyecto->getElemento($_GET['idProceso']);

$datosindicador = $objProyecto->getIndicadorMinisterio($_GET['idElemento']);

foreach ($datosproceso as $key => $value) {


   $tablaproceso .= "

                 <ul id='myList'>
                      <a href=# onClick= \"procesarProceso('".$datosproceso[$key]['idProceso']."','".$datosproceso[$key]['nombreProceso']."')\" ><td>".utf8_encode($datosproceso[$key]['nombreProceso'])."</td></a>

                       <div id='div".$datosproceso[$key]['idProceso']."'></div>
                 </ul>



              ";



          }





echo $tablaproceso;


foreach ($datoelemento as $key => $value) {


   $tablaelemento .= "  <ul id='myList'>

                   <a href=#  onClick= \"  procesarElemento('".$datoelemento[$key]['idElemento']."','".$datoelemento[$key]['nombreElemento']."')\" >  <td>".utf8_encode($datoelemento[$key]['nombreElemento'])."</td> </a>
									 <div id='div".$datoelemento[$key]['idElemento']."'></div>
                 </ul>


                  " ;


            }



  echo $tablaelemento;

	foreach ($datosindicador as $key => $value) {


	   $tablaindicador .= "  <ul class='nav'>

	                   <a href=#  onClick= \"  procesarIndicadorMinisterio('".$datosindicador[$key]['idIndicadorME']."','".$datosindicador[$key]['codigoME']."')\" >  <td>".utf8_encode($datosindicador[$key]['codigoME'])."</td> </a>

	                 </ul>


	                  " ;


	            }



	  echo $tablaindicador;



?>
