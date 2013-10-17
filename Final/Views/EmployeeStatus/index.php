<?php
include_once '../../inc/_global.php';

$model  = EmployeeStatus::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
