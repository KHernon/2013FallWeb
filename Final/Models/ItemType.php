<?php

class ItemType{
	
	static public function Get(){
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM 2013Fall_ItemType');
		
		while ($rs = $result->fetch_assoc()) {
			$ret[] = $rs;
		}
		$conn->close();
		return $ret;
	}
	
	static public function GetSelectListFor()
	{
		return fetch_all("SELECT id, Value FROM 2013Fall_ItemType");
	}
}
