<?php
include_once '../../inc/_global.php';

$model  = EmployeeType::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
