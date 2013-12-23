<?php

/**
 * 
 */
class Item {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			$sql = "	SELECT 2013Fall_Item.* , 2013Fall_User.FirstName, 2013Fall_User.LastName, 2013Fall_ItemType.Value as ItemType, 2013Fall_ItemCategory.Value as ItemCategory, 2013Fall_ShippingAddress.Name as ShippingName, 2013Fall_ShippingAddress.Address1, 2013Fall_ShippingAddress.Address2, 2013Fall_ShippingAddress.City, 2013Fall_ShippingAddress.State, 2013Fall_ShippingAddress.PostalCode, 2013Fall_ShippingAddress.Country
						FROM 2013Fall_Item
						LEFT JOIN 2013Fall_User ON 2013Fall_Item.User_id = 2013Fall_User.id
						LEFT JOIN 2013Fall_ItemType ON 2013Fall_Item.ItemType_id = 2013Fall_ItemType.id
						LEFT JOIN 2013Fall_ItemCategory ON 2013Fall_Item.ItemCategory_id = 2013Fall_ItemCategory.id
						LEFT JOIN 2013Fall_ShippingAddress ON 2013Fall_Item.ShippingAddress_id = 2013Fall_ShippingAddress.id
						WHERE 2013Fall_Item.Id = =$id
						GROUP BY 2013Fall_Item.id
					";
			return fetch_one($sql);			
		}else{
			$sql = "	SELECT 2013Fall_Item.* , 2013Fall_User.FirstName, 2013Fall_User.LastName, 2013Fall_ItemType.Value as ItemType, 2013Fall_ItemCategory.Value as ItemCategory, 2013Fall_ShippingAddress.Name as ShippingName, 2013Fall_ShippingAddress.Address1, 2013Fall_ShippingAddress.Address2, 2013Fall_ShippingAddress.City, 2013Fall_ShippingAddress.State, 2013Fall_ShippingAddress.PostalCode, 2013Fall_ShippingAddress.Country
						FROM 2013Fall_Item
						LEFT JOIN 2013Fall_User ON 2013Fall_Item.User_id = 2013Fall_User.id
						LEFT JOIN 2013Fall_ItemType ON 2013Fall_Item.ItemType_id = 2013Fall_ItemType.id
						LEFT JOIN 2013Fall_ItemCategory ON 2013Fall_Item.ItemCategory_id = 2013Fall_ItemCategory.id
						LEFT JOIN 2013Fall_ShippingAddress ON 2013Fall_Item.ShippingAddress_id = 2013Fall_ShippingAddress.id						
						GROUP BY 2013Fall_Item.id
					";
			return fetch_all($sql);			
		}
	}
	
	static public function Blank()
	{
		return array( 'id'=>null, 'Brand'=> null,'Name'=> null,'OriginalPrice'=> null,'Price'=> null, 'ModelNo'=> null,'Description'=> null,'LongDescription'=> null,'Dimensions'=> null,'Weight'=> null,'Color'=> null,'Quantity'=> null,	'ItemType_id'=> null, 'ItemCategory_id'=> null,	'User_id'=> null,'ShippingAddress_id'=> null);
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Item::Encode($row, $conn);
		if($row['id']){
			$sql =	" UPDATE 2013Fall_Item "
				.	" Set Brand='$row2[Brand]', Name='$row2[Name]', OriginalPrice='$row2[OriginalPrice]', Price='$row2[Price]', ModelNo='$row2[ModelNo]', Description='$row2[Description]',	LongDescription='$row2[Brand]', Dimensions='$row2[Dimensions]', Weight='$row2[Weight]', Color='$row2[Color]', Quantity='$row2[Quantity]', ItemType_id='$row2[ItemType_id]', ItemCategory_id='$row2[ItemCategory_id]', User_id='$row2[User_id]', ShippingAddress_id='$row2[ShippingAddress_id]'"
				.	" WHERE id=$row2[id] ";
		}else{
			$sql = 	" Insert Into 2013Fall_Item (Brand, Name, OriginalPrice, Price, ModelNo, Description, LongDescription, Dimensions, Weight, Color, Quantity, ItemType_id, ItemCategory_id, User_id, ShippingAddress_id) "
				.	" Values ('$row2[Brand]','$row2[Name]', '$row2[OriginalPrice]', '$row2[Price]', '$row2[ModelNo]', '$row2[Description]',	'$row2[Brand]', '$row2[Dimensions]', '$row2[Weight]', '$row2[Color]', '$row2[Quantity]', '$row2[ItemType_id]', '$row2[ItemCategory_id]', '$row2[User_id]', '$row2[ShippingAddress_id]')";			
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
		$sql =	" DELETE From 2013Fall_Item WHERE id=$id ";
				
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
		if(!$row['Brand']) $errors['Brand'] = 'id required';
		if(!$row['Name']) $errors['Name'] = 'id required';		
		if(!$row['OriginalPrice']) $errors['OriginalPrice'] = 'id required';
		if(!$row['Price']) $errors['Price'] = 'id required';
		if(!$row['ModelNo']) $errors['ModelNo'] = 'id required';		
		if(!$row['Description']) $errors['Description'] = 'id required';
		if(!$row['LongDescription']) $errors['LongDescription'] = 'id required';
		if(!$row['Dimensions']) $errors['Dimensions'] = 'id required';		
		if(!$row['Weight']) $errors['Weight'] = 'id required';
		if(!$row['Color']) $errors['Color'] = 'id required';		
		if(!is_numeric( $row['Quantity'])) $errors['Quantity'] = 'must be a number';
		if(!$row['Quantity']) $errors['Quantity'] = 'id required';			
		if(!is_numeric( $row['ItemType_id'])) $errors['ItemType_id'] = 'must be a number';
		if(!$row['ItemType_id']) $errors['ItemType_id'] = 'id required';		
		if(!is_numeric( $row['ItemCategory_id'])) $errors['ItemCategory_id'] = 'must be a number';
		if(!$row['ItemCategory_id']) $errors['ItemCategory_id'] = 'id required';
		if(!is_numeric( $row['User_id'])) $errors['User_id'] = 'must be a number';
		if(!$row['User_id']) $errors['User_id'] = 'id required';
		if(!is_numeric( $row['ShippingAddress_id'])) $errors['ShippingAddress_id'] = 'must be a number';
		if(!$row['ShippingAddress_id']) $errors['ShippingAddress_id'] = 'id required';
		
		
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
