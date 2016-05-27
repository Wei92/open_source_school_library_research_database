<?php
session_start();
$validate="";
if(isset($_GET["validate"])){
	$validate=$_GET["validate"];
	if($validate!=$_SESSION["authnum_session"]){
	//判断session值与用户输入的验证码是否一致;
	echo "<font color=red>Capcha is wrong</font>"; 
	}else{
		echo "<font color=green>Success</font>"; 
	}
} 


?>