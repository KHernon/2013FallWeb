<?php
include_once '../../inc/_global.php';

$model  = Salary::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
