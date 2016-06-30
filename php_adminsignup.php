<?php
include_once 'DBConn.php';

$ref1 = "$%^T&FGH90JKY5ThU(*FVGHBJNM";
$ref2 = "edmonton".date("Ymd");
$encrpt1 = "albertaedmonton";



if ($_POST['ref1'] === $ref1 && $_POST['ref2'] === $ref2) {
	// auth successed
	foreach ($_POST as $key => $value) {
		$value = mysql_escape_string($value);
	}

	$query = 'select * from libadmin where username = "'.$_POST['username'].'"';
	if (!$res = DBConn::getConnection()->query($query)) {
		die('There was an error running the query [' . $query->error . ']');
	}

	$row = $res->fetch_assoc();
	if (!$row==null){
		setcookie("alertsign", "Username already exits.", time()+10);
		echo "<script language=javascript>location.href='admin.php'</script>";
	}

	$password = md5($_POST['password'].$encrpt1);

	$query = 'INSERT INTO libadmin VALUES (\N,'.'"'.$_POST['username'].'",'.'"'.$password.'")';
	if ( $res = DBConn::getConnection()->query($query)) {
        echo "Sign up succuss. Your username is " . $_POST['username'].". Your password is ". $_POST['password'].". Please keep them in a secure way.";
    }else{
    	die('There was an error running the query [' . $query->error . ']');
    }

}else{
	setcookie("alertsign", "References are wrong, please retry", time()+10);
	echo "<script language=javascript>location.href='admin.php'</script>";
}







?>