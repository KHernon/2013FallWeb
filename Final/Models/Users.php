<?php

/**
 * 
 */
class Users {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM 2013Fall_User WHERE id=$id");			
		}else{
			return fetch_all('SELECT * FROM 2013Fall_User');			
		}
	}
	
	static public function Blank()
	{
		return array( 'FirstName'=> null,'LastName'=> null,'Password'=> null);
	}
	
	static public function Save($row)
	{
		$sql = 	" Insert Into 2013Fall_User (FirstName, LastName, Password) "
			.	" Values ('$row[FirstName]', '$row[LastName]', '$row[Password]') ";
		$conn = GetConnection();
		$conn->query($sql);
		$error = $conn->error;		
		$conn->close();
		
		if($error){
			return array('db_error' => $error);
		}else {
			return false;
		}
	}
	
	static public function Validate($row)
	{
		$errors = array();
		if(!$row['FirstName']) $errors['FirstName'] = 'id required';
		if(!$row['LastName']) $errors['LastName'] = 'id required';				
		return count($errors) ? $errors : null;
	}
}
