<?php
include_once('_password.php');
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';



function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02285069', $sql_password, 'n02285069_db');
	return $conn;
}