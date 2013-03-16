<?php

/**
 * @package califica-online
 * @author Michelle Torres <lic.nancy.torres@gmail.com>
 * @version 1.0
 */

define('SRC_PATH','../src/');

if ( !isset ( $_GET['controller']) )
	$_GET['controller'] = 'standar';

switch($_GET['controller']){

	case 'user':
		//Load controller
		require_once ( SRC_PATH.'controller/userCtl.php' );
		$ctl = new UserCtl();
		break;

	case 'class':
		//Load controller
		require_once ( SRC_PATH.'controller/classCtl.php' );
		$ctl = new ClassCtl();
		break;
	
	case 'standar':
		//Load controller
		require_once ( SRC_PATH.'controller/indexCtl.php' );
		$ctl = new IndexCtl();
		break;
}

//Run the controller
$ctl -> run();