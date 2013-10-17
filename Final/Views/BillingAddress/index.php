<?php
include_once '../../inc/_global.php';

$model  = BillingAddress::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
