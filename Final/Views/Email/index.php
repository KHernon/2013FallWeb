<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'details':
		$model  = Email::Get($_REQUEST['id']);
		$view 	= 'details.php';		
		break;
		
	case 'new':
		$model = Email::Blank();
		$view 	= 'edit.php';		
		break;
	
	case 'save':
		$errors = Email::Validate($_REQUEST);
		if(!$errors){
			$errors = Email::Save($_REQUEST);			
		}
		if(!$errors){
			header("Location: ?");
			die();
		}			
			$model = $_REQUEST;
			$view = 'edit.php';
		break;
		
	case 'edit':
		$model  = Email::Get($_REQUEST['id']);
		$view 	= 'edit.php';		
		break;
		
	case 'delete':
		$model  = Email::Get($_REQUEST['id']);
		$view 	= 'details.php';		
		break;
	
	default:
		$model  = Email::Get();
		$view 	= 'list.php';		
		break;
}

switch ($format) {
	case 'min':
		include $view;
		break;
	case 'dialog':
		include '../Shared/_Dialog.php';
		break;
	
	default:
		include '../Shared/_Layout.php';
		
		break;
}
