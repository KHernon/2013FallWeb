<?php
include_once '../../inc/_global.php';

$model  = ShippingAddress::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
