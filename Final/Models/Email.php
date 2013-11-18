<?php

/**
 * 
 */
class Email {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT E.*, K.FirstName, K.LastName
						FROM 2013Fall_Email E
							Join 2013Fall_User K ON E.User_id= K.id
						WHERE E.id=$id
					";
			return fetch_one($sql);			
		}else{
			$sql = "	SELECT E.*, K.FirstName, K.LastName
						FROM 2013Fall_Email E
							Join 2013Fall_User K ON E.User_id= K.id
					";
			return fetch_all($sql);			
		}
	}
	
	static public function Blank()
	{
		return array( 'id'=>null,'FirstName'=> null,'LastName'=> null,'Value'=> null);
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Email::Encode($row, $conn);
		if($row['id']){
			$sql =	" UPDATE 2013Fall_Email "
				.	" Set Value='$row2[Value]'"
				.	" WHERE id=$row2[id] ";
		}else{
			$sql = 	" Insert Into 2013Fall_Users (Value, User_id) "
				.	" Values ('$row2[Value]', '$row2[User_id]') ";			
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
		$sql =	" DELETE From 2013Fall_Users WHERE id=$id ";
				
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
		if(!$row['Value']) $errors['Value'] = 'id required';		
		if(!is_numeric( $row['User_id'])) $errors['User_id'] = 'must be a number';
		if(!$row['User_id']) $errors['User_id'] = 'id required';
		
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
