<?php
// created by Wei Wei
function __autoload($classname){
	// autoload Class
	$file = $classname . ".php";
	require_once $file;
}

?>