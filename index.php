<?php
$titulo_pagina = "Sistema....";
include("util/Seguridad.php");
include("util/config.php");
include("includes/headerprincipal.php");
?>

<?php
if(!Seguridad::sesionIniciada())
	include("login.php");
else
	header("Location: http://".$dominio."/sistema-calidad/".$pagina_principal);
?>

<?php
include("includes/footer.php");
session_destroy();




?>
