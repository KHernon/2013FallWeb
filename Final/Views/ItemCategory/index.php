<?php
include_once '../../inc/_global.php';

$model  = ItemCategory::Get();
$view 	= 'list.php';

include '../Shared/_Layout.php';
