<?php

include_once 'DBConn.php';
$ref0 = "YF@G^%^&*C"; // check the ref number
$encrpt1 = "albertaedmonton";
$encrpt2 = "education";

if ($_POST['ref'] === $ref0) {
	// auth successed

 	foreach ($_POST as $key => $value) {
		$value = mysql_escape_string($value);
	}

	$password = $_POST['password'];
	$password = md5($encrpt1);
	$password = md5($encrpt2);

	$query = 'select password from libadmin where username = "'.$_POST['username'].'"';
	
	if(!$res = DBConn::getConnection()->query($query)){
		die('There was an error running the query [' . $query->error . ']');
	}

	$row = $res->fetch_assoc();
	if ($row == null) {
		setcookie("alertlog", "Username doesn't exit.", time()+10);
		echo "<script language=javascript>location.href='admin.php'</script>";
	}else{
		if ($password == $row['password']) {
			echo "Login successfully.";
		}else{
			echo "Password is wrong.";
		}
	}

 } else{
 	// auth failed
 	setcookie("alertlog", "Reference is wrong, please retry", time()+10);
	echo "<script language=javascript>location.href='admin.php'</script>";
 }

//setcookie("alertlog", "Log in failed, please retry", time()+10);
//echo "<script language=javascript>location.href='admin.php'</script>";
?>