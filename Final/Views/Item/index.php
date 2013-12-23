<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'details':
		$model  = Item::Get($_REQUEST['id']);
		$view 	= 'details.php';
		$title	= "Details for: $model[Name]"	;	
		break;
		
	case 'new':
		$model = Item::Blank();
		$view 	= 'edit.php';		
		$title	= "Create New Item"	;	
		break;
	
	case 'save':
		$errors = Item::Validate($_REQUEST);
		if(!$errors){
			$errors = Item::Save($_REQUEST);			
		}
		if(!$errors){
			if($format == 'plain' || $format == 'json'){
				$view = 'item.php';
				$rs = $model = Item::Get($_REQUEST['id']);
			}else{
				header("Location: ?status=Saved&id=$_REQUEST[id]");
				die();				
			}
		}else{
			$model = $_REQUEST;
			$view = 'edit.php';
			$title	= "Edit: $model[Name]"	;			
		}		
		break;
		
	case 'edit':
		$model  = Item::Get($_REQUEST['id']);
		$view 	= 'edit.php';		
		$title	= "Edit: $model[Name]"	;	
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
			$errors = Item::Delete($_REQUEST['id']);			
			if(!$errors){
				header("Location: ?");
				die();
			}							
		}
		$model  = Item::Get($_REQUEST['id']);
		$view 	= 'delete.php';					
		$title	= "Edit: $model[Name]"	;	
		break;
	
	default:
		$model  = Item::Get();
		$view 	= 'list.php';
		$title	= 'Items';		
		break;
}

switch ($format) {
	case 'dialog':
		include '../Shared/_DialogLayout.php';				
		break;
		
	case 'plain':
		include $view;
		break;
		
	case 'json':
		echo json_encode(array('model'=> $model, 'errors'=> $errors));
		break;
	
	default:
		include '../Shared/_Layout.php';		
		break;
}

