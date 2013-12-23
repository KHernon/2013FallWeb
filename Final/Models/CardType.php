<?php

/**
 * 
 */
class CardType {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM 2013Fall_CardType WHERE id=$id");			
		}else{
			return fetch_all('SELECT * FROM 2013Fall_CardType');			
		}
	}
	
	static public function Blank()
	{
		return array( 'Value'=> null);
	}
	
	static public function Save($row)
	{
		$sql = 	" Insert Into 2013Fall_CardType (Value) "
			.	" Values ('$row[Value]') ";
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
		if(!$row['Value']) $errors['Value'] = 'id required';					
		return count($errors) ? $errors : null;
	}
	static public function GetSelectListFor()
	{
		return fetch_all("SELECT id, Value FROM 2013Fall_CardType");
	}
}
