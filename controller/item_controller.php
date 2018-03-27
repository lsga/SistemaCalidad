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

$datos4 = $objProyecto->Items();

$datos2 = $objProyecto->getItem($_GET['idAmbito']);

$datos3 = $objProyecto->getIndicador($_GET['iditem']);



foreach ($datos2 as $key => $value) {


   $tabla2 .= "

                 <ul id='myList'>
                      <a href=# onClick= \"procesarItem('".$datos2[$key]['ID_ITEM']."','".$datos2[$key]['NOMBREITEM']."')\" ><td>".utf8_encode($datos2[$key]['NOMBREITEM'])."</td></a>

                       <div id='div".$datos2[$key]['ID_ITEM']."'></div>
                 </ul>



              ";



          }





echo $tabla2;


foreach ($datos3 as $key => $value) {


   $tabla3 .= "  <ul class='nav'>

                   <a href=#  onClick= \"  procesarIndicador('".$datos3[$key]['id_indicador']."','".$datos3[$key]['indicador_decripcion']."')\" >  <td>".$datos3[$key]['indicador_decripcion']."</td> </a>

                 </ul>


                  " ;


            }



  echo $tabla3;





?>
