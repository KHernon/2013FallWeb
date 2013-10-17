<?php
include_once '../../inc/_global.php';

$model  = OrderStatus::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
