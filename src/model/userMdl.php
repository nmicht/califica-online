<?php

/**
 * @package califica-online
 * @subpackage model
 * @author Michelle Torres <lic.nancy.torres@gmail.com>
 * @version 1.0
 */

class UserMdl extends DBMng{

	function insert($code,$pass,$prof){
		//Crear el query
		$query = "INSERT INTO 
					alumno (nombre, mail, pass, privilegio)
				  VALUES 
					('$nombre',
					 '$mail',
					 '$pass',
					 $privilegio)";

		//Ejecutar el query
		$resultado = $this -> query($query);
	}
}