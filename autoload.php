<?php
// created by Wei Wei
function __autoload($classname){
	$file = $classname . ".php";
	require_once $file;
}

?>