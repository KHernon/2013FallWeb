<?php
include_once('_password.php');
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/BillingAddress.php';
include_once __DIR__ . '/../Models/CardType.php';
include_once __DIR__ . '/../Models/CreditCard.php';
include_once __DIR__ . '/../Models/Email.php';
include_once __DIR__ . '/../Models/Employee.php';
include_once __DIR__ . '/../Models/EmployeeStatus.php';
include_once __DIR__ . '/../Models/EmployeeType.php';
include_once __DIR__ . '/../Models/HourlyRate.php';
include_once __DIR__ . '/../Models/Item.php';
include_once __DIR__ . '/../Models/ItemCategory.php';
include_once __DIR__ . '/../Models/ItemSubCategory.php';
include_once __DIR__ . '/../Models/ItemType.php';
include_once __DIR__ . '/../Models/ItemTypeSortField.php';
include_once __DIR__ . '/../Models/Order.php';
include_once __DIR__ . '/../Models/OrderStatus.php';
include_once __DIR__ . '/../Models/PaymentInfo.php';
include_once __DIR__ . '/../Models/PhoneNumber.php';
include_once __DIR__ . '/../Models/PhoneType.php';
include_once __DIR__ . '/../Models/Picture.php';
include_once __DIR__ . '/../Models/Review.php';
include_once __DIR__ . '/../Models/Salary.php';
include_once __DIR__ . '/../Models/SecurityQuestion.php';
include_once __DIR__ . '/../Models/ShippingAddress.php';
include_once __DIR__ . '/../Models/ShippingMethod.php';
include_once __DIR__ . '/../Models/ShoppingCart.php';
include_once __DIR__ . '/../Models/User.php';
include_once __DIR__ . '/../Models/WishList.php';
include_once __DIR__ . '/../Models/Auth.php';




function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02285069', $sql_password, 'n02285069_db');
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

function fetch_one($sql)
{
	$arr = fetch_all($sql);
	return $arr[0];
}