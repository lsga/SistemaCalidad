<?php //
//include(dirname(__DIR__)."../util/Seguridad.php");
//include("../util/Config.php");
$codigo_error = $_GET["codigo"];

if($codigo_error == "1"){ ?>
	<p>Debe iniciar sesion para ingresar el sistema</p>
	<p><a href="<?php echo $path;?>">Iniciar sesion</a></p>
<?php } ?>

<?php die(); ?>