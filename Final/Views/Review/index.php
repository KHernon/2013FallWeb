<?php
include_once '../../inc/_global.php';

$model  = Review::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
