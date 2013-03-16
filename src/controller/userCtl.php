<?php

/**
 * @package califica-online
 * @subpackage controller
 * @author Michelle Torres <lic.nancy.torres@gmail.com>
 * @version 1.0
 */

require_once ('stdCtl.php');
include('model/userMdl.php');

class UserCtl extends StdCtl{
	public $model;

	function __construct(){
		//Load the model
		$this -> model =  new UserMdl();
	}

	function run(){
		switch($_GET['action']) {
			case 'list':
				//Confirm is a user with suficient permissions
				
				$this -> list();
				break;

			case 'insert':
				//Clean variables
				$code	= $this -> sanitizeTexto ( $_POST['code'] );
				$pass	= $this -> sanitizeEncriptado ( $_POST['pass'] );
				$prof 	= $this -> sanitizeNumero ( $_POST['profile'] );

				$user = $this -> model -> insert($code,$pass,$prof);
		
				if ( is_object($user) ){
					//Load view
					include('view/userView-.php');
				}
				else{
				}
				break;

			default:
				$this -> show_profile();
		}
	}	
}
