<?php

/**
 * 
 */
class CreditCard {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT 2013Fall_CreditCard.* , 2013Fall_User.FirstName, 2013Fall_User.LastName, 2013Fall_CardType.Value as Cardtype
						FROM 2013Fall_CreditCard
						LEFT JOIN 2013Fall_User ON 2013Fall_CreditCard.User_id = 2013Fall_User.id
						LEFT JOIN 2013Fall_ItemType ON 2013Fall_CreditCard.CardType_id = 2013Fall_CardType.id	
						WHERE 2013Fall_CreditCard.Id = =$id					
						GROUP BY 2013Fall_CreditCard.id
					";
			return fetch_one($sql);			
		}else{
			$sql = "	SELECT 2013Fall_CreditCard.* , 2013Fall_User.FirstName, 2013Fall_User.LastName, 2013Fall_CardType.Value as Cardtype
						FROM 2013Fall_CreditCard
						LEFT JOIN 2013Fall_User ON 2013Fall_CreditCard.User_id = 2013Fall_User.id
						LEFT JOIN 2013Fall_ItemType ON 2013Fall_CreditCard.CardType_id = 2013Fall_CardType.id											
						GROUP BY 2013Fall_CreditCard.id
					";
			return fetch_all($sql);			
		}
	}
	
	static public function Blank()
	{
		return array('id'=> null,'CardType_id'=> null,'User_id'=> null,'CardName'=> null,'NameOnCard'=> null,'CardNumber'=> null,'ExpMonth'=> null,'ExpYear'=> null,'AuthCode'=> null);
	}
	
	static public function Save($row)
	{
		$sql = 	" Insert Into 2013Fall_User (CardType_id, User_id, CardName, NameOnCard, CardNumber, ExpMonth, ExpYear, AuthCode) "
			.	" Values ('$row[Card]', '$row[LastName]', '$row[Password]') ";
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
	static public function GetSelectListFor()
	{
		return fetch_all("SELECT id, FirstName, LastName FROM 2013Fall_User");
	}
}
