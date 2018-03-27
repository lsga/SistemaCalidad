<?php
require_once ('../model/model_proyecto.php');
$config = require_once("../util/config.php");

try {
	if (!isset($db))
		$db = new PDO($config["conexion_string"]);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


$objProyecto= new proyecto($db);
$datos = $objProyecto->getProyecto($codigo);



?>
