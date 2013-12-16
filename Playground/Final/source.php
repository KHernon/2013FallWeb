<?

$mysql_server = 'localhost';
$mysql_login = 'plotkinm';
$mysql_password = 'FaceBooK';
$mysql_database = 'plotkinm_db';

mysql_connect($mysql_server, $mysql_login, $mysql_password);
mysql_select_db($mysql_database);

$req = "SELECT * "
	."FROM US_Zip_Codes "
	."WHERE city LIKE '%".$_REQUEST['term']."%' "; 

$query = mysql_query($req);

while($row = mysql_fetch_array($query))

{
	$temp = $row['city'] . ', ' . $row['state'] . ' ' . $row['zip'];		
	$results[] = array('label' => $temp, 'value' => $temp);
}

echo json_encode($results)


?>