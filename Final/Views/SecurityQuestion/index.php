<?php
include_once '../../inc/_global.php';

$model  = SecurityQuestion::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
