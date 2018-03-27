<?php

class Usuario{

	protected $usuario;
	protected $password;
	protected $nombre;
	protected $rol;

	public function login($data){

		$link =  new PDO('mysql:host=localhost;dbname=sistema_calidad', 'root' ,'' );

		$sql = "SELECT * from  usuario u, rol r where u.ID_ROL = r.ID_ROL AND USER= '".$data['usuario']."' AND PASSWORD= '".$data['password']."'";


		$result = $link->query($sql);
		$usuario = $result->fetch(PDO::FETCH_ASSOC);

		if($usuario){
			Seguridad::iniciaSesion($usuario);
			return true;
		}
		else{

		        return false;
		}



		//$usuario["nombre"]="Diego";$usuario["apellido"]="Ruiz";$usuario["rol"]="1";$usuario["nombre_rol"]="Tecnico";
		//Seguridad::iniciaSesion($usuario);
		//return true;
	}
}
