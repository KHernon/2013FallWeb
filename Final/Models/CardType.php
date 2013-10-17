<?php

class CardType{
	
	static public function Get(){
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM 2013Fall_CardType');
		
		while ($rs = $result->fetch_assoc()) {
			$ret[] = $rs;
		}
		$conn->close();
		return $ret;
	}
}
