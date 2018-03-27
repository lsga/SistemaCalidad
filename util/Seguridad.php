<?php
session_start();
/**
 * Clase para manejar seguridad del sistema
 * @author E.R
 *
 */
class Seguridad{
	/**
	 * Setea variable global al iniciar una sesion correctamente
	 * @return void
	 */

	public static function iniciaSesion($usuario){
		$_SESSION['sesion'] = 'OK';
		$_SESSION['nombreUsuario'] = $usuario["NOMBRESUSUARIO"];
		$_SESSION['apellidoUsuario'] = $usuario["APELLIDOSUSUARIO"];
		$_SESSION['rol'] = $usuario["ID_ROL"];
		$_SESSION['nombreRol'] = $usuario["NOMBREROL"];
	}
	/**
	 * Finaliza la sesion en el servidor
	 * @return void
	 */
	public static function finalizaSesion(){
		$_SESSION['sesion'] = null;
	}
	/**
	 * Verifica si hay una sesion en curso y devuelve verdadero o falso
	 * @return boolean Verdadero si hay una sesion en curso caso contrario falso
	 */
	public static function sesionIniciada(){
		if(isset($_SESSION['sesion']))
			$flag = true;
		else
			$flag = false;

		return $flag;
	}
}
