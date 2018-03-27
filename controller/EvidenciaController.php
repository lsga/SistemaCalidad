<?php
require_once ('../model/pregunta_model.php');
$config = require_once("../util/config.php");
try {
	if (!isset($db))
		$db = new PDO('mysql:host=localhost;dbname=sistema_calidad', 'root' ,'' );
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

$objAnalisisT = new pregunta($db);
//print_r($_POST);
//echo "chk_respuesta=".$_POST['chk_respuesta'];
//echo "archivo_informe=".$_FILES['archivo_informe'];
//var_dump($POST );

    $respuesta = $objAnalisisT->insertar_evidencia( $_POST["txtevidencia"],$_POST["id_pregunta"], $_FILES['archivo_informe'] );


?>
