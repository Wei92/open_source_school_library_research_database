<?php
// created by Wei Wei
session_start();

if (empty($_SESSION['adminid'])) {
	setcookie("alertlog", "Reference is wrong, please retry", time()+3);
	echo "<script language=javascript>location.href='admin.php'</script>";
}else{
	//echo $_SESSION['adminid'];
	include 'adminmain.php';
}





?>