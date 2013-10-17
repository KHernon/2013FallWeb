<?php
include_once '../../inc/_global.php';

$model  = Order::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
