<?php

class Email{
	
	static public function Get(){
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM 2013Fall_Email');
		
		while ($rs = $result->fetch_assoc()) {
			$ret[] = $rs;
		}
		$conn->close();
		return $ret;
	}
}
