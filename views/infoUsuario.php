
<?php


if(isset($_SESSION["sesion"])){ ?>

<div id="infoUsuario">
	<div id="infoUsuario_nombre" align="left" ><?php echo "Bienvenido: ".$_SESSION["nombreUsuario"]." ".$_SESSION["apellidoUsuario"]." "?></div>
	<div id="infoUsuario_rol"><?php echo "Rol: ".$_SESSION['nombreRol']?></div>
        <div id="infoPeriodo" align="center"  ><?php echo "Periodo Escolar: ".$_COOKIE['id_encuesta']." "?></div>
																												 
</div>
<?php }

?>
