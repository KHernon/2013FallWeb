<?php
include_once '../../inc/_global.php';

$model  = User::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
