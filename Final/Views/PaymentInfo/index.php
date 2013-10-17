<?php
include_once '../../inc/_global.php';

$model  = PaymentInfo::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
