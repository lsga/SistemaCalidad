
<?php
include_once("../util/Seguridad.php");
include("../util/config.php");
include("../model/Usuario.php");

$data = array();
$accion = $_POST["accion"];

if($accion == "login"){
	$data["usuario"] = $_POST["txtUsuario"];
	$data["password"] = $_POST["txtPassword"];

	$usuario = new Usuario();
	$usuario = $usuario->login($data);

	//$pagina_principal = "views/inicio.php";



	/**
	 * Pagina principal segun rol
	 */
	if(Seguridad::sesionIniciada()){
			$pagina_principal = "views/principal.php";
		//if($_SESSION['rol'] == "2")
	}


		if($usuario){
			header("Location: ".$path."/".$pagina_principal);
		}else{
			header("Location: $path");
		}


}
