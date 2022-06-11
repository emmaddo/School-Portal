<?php
$request = $_SERVER['REQUEST_URI'];
//echo $request;

if(($request=='/portal/admin')||($request=='/portal/admin/')){
	require __DIR__ . '/views/login.php';
	
}
?>