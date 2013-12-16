<?
function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'plotkinm', 'FaceBooK', 'plotkinm_db');
	return $conn;
}

function fetch_all($sql)
{
	$ret = array();
	$conn = GetConnection();
	$result = $conn->query($sql);
	
	while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
	}
	
	$conn->close();
	return $ret;
}

$new = fetch_all('SELECT * FROM US_Zip_Codes');
echo json_encode($new);	




$req = "SELECT city "
	."FROM US_Zip_Codes "
	."WHERE cit LIKE '%".$_REQUEST['term']."%' "; 

$query = mysql_query($req);

while($row = mysql_fetch_array($query))
{
	$results[] = array('City' => $row['name'], 'ID' => $row['ID']);
}

echo json_encode($results);

?>