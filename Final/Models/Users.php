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
		$conn = GetConnection();
		$row2 = Users::Encode($row, $conn);
		if($row['id']){
			$sql =	" UPDATE 2013Fall_User "
				.	" Set FirstName='$row2[FirstName]', LastName='$row2[LastName]', Password='$row2[Password]'"
				.	" WHERE id=$row2[id] ";
		}else{
			$sql = 	" Insert Into 2013Fall_User (FirstName, LastName, Password) "
				.	" Values ('$row2[FirstName]', '$row2[LastName]', '$row2[Password]') ";			
		}
		
		$conn->query($sql);
		//echo $sql; 
		$error = $conn->error;		
		$conn->close();
		//$error = "dd";
		if($error){
			return array('db_error' => $error);
		}else {
			return false;
		}
	}
	
	static public function Delete($id)
	{
		$conn = GetConnection();
		$sql =	" DELETE From 2013Fall_User WHERE id=$id ";
				
		$conn->query($sql);
		//echo $sql; 
		$error = $conn->error;		
		$conn->close();
		//$error = "dd";
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

	static function Encode($row, $conn)
	{
		$row2 = array();
		foreach ($row as $key => $value) {
			$row2[$key] = $conn->real_escape_string($value);		
		}
		return $row2;
	}
}