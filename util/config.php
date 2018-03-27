<?php
$dominio = "localhost";

$conexion =mysql_connect('localhost', 'root', '');mysql_select_db('sistema_calidad');

mysql_set_charset('utf8');

$path = "http://".$dominio."/SistemaCalidad";


?>
