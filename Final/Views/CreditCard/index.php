<?php
include_once '../../inc/_global.php';

$model  = Creditcard::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
