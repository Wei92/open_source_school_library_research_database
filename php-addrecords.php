<?php

// test capcha
session_start();
$validate="";
if(isset($_GET["validate"])){
	$validate=$_GET["validate"];
	if($validate!=$_SESSION["authnum_session"]){
	//判断session值与用户输入的验证码是否一致;
	// capcha is wrong:
	echo "<font color=red>Capcha is wrong</font>"; 
	}else{
		// capcha is right, continue to insert sql into the database
		echo "<font color=green>Success</font>"; 
	}
} 


?>