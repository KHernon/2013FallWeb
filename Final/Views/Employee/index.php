<?php
include_once '../../inc/_global.php';

$model  = Employee::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
