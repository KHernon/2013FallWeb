<?php

/**
 * 
 */
class ShippingAddress {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT E.*, K.FirstName, K.LastName
						FROM 2013Fall_ShippingAddress E
							Join 2013Fall_User K ON E.User_id= K.id
						WHERE E.id=$id
					";
			return fetch_one($sql);			
		}else{
			$sql = "	SELECT E.*, K.FirstName, K.LastName
						FROM 2013Fall_ShippingAddress E
							Join 2013Fall_User K ON E.User_id= K.id
					";
			return fetch_all($sql);			
		}
	}
	
	static public function Blank()
	{
		return array( 'id'=>null,'Name'=> null,'Address1'=> null,'Address2'=> null,'City'=> null,'State'=> null,'PostalCode'=> null,'Country'=> null);
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = ShippingAddress::Encode($row, $conn);
		if($row['id']){
			$sql =	" UPDATE 2013Fall_ShippingAddress "
				.	" Set Name='$row2[Name]', Address1='$row2[Address1]', 
						Address2='$row2[Address2]', City='$row2[City]', State='$row2[State]', PostalCode='$row2[PostalCode]', Country='$row2[Country]'"
				.	" WHERE id=$row2[id] ";
		}else{
			$sql = 	" Insert Into 2013Fall_ShippingAddress (Name, Address1, Address2, City, State, PostalCode, Country, User_id) "
				.	" Values ('$row2[Name]', '$row2[Address1]', '$row2[Address2]', '$row2[City]', '$row2[State]', '$row2[PostalCode]', '$row2[Country]', '$row2[user_id]') ";			
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
		$sql =	" DELETE From 2013Fall_ShippingAddress WHERE id=$id ";
				
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
		if(!$row['Name']) $errors['Name'] = 'id required';
		if(!$row['Address1']) $errors['Address1'] = 'id required';
		if(!$row['City']) $errors['City'] = 'id required';		
		if(!$row['State']) $errors['State'] = 'id required';
		if(!$row['PostalCode']) $errors['PostalCode'] = 'id required';
		if(!$row['Country']) $errors['Country'] = 'id required';
		
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
