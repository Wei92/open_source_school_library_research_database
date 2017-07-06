<?php
// created by Wei Wei
// php form - admin sign up
include_once 'DBConn.php';

// test captcha first
session_start();
$validate="";

if(isset($_POST["validate"])){
	$validate=$_POST["validate"];
	if($validate!=$_SESSION["authnum_session"]){
	// check if the value of session is equal to users' input;
	// capcha is wrong:
	echo "<font color=red>Capcha is wrong. Please re-enter the data.</font>";
	echo ""; 
}else{
		// capcha is right, continue to insert sql into the database

	$ref1 = "$%^T&FGH90JKY5ThU(*FVGHBJNM";
	$ref2 = "edmonton".date("Ymd");
	$encrpt1 = "albertaedmontonG*^(HUIJIP";



	if ($_POST['ref1'] === $ref1 && $_POST['ref2'] === $ref2) {
		// auth successed
		
		
		foreach ($_POST as $key => $value) {
			$value = mysqli_escape_string($value);
		}
		
		$content = array();
		$content = $_POST;

		$query = 'select * from libadmin where username = "'.$content['username'].'"';
		$res = DBConn::getConnection()->query($query);
		$row = $res->fetch_assoc();
		if (!$row==null){
			setcookie("alertsign", "Username already exits.", time()+3);
			echo "<script language=javascript>location.href='admin.php'</script>";
		}else{
			$password = md5($_POST['password'].$encrpt1);
			$query = 'INSERT INTO libadmin VALUES (\N,'.'"'.$content['username'].'",'.'"'.$password.'")';
			if(DBConn::getConnection()->query($query)){
				echo "Sign up succussfully. </br>Your username is " . $content['username'].".";
			}
		}

		

	}else{
		setcookie("alertsign", "References are wrong, please retry", time()+3);
		echo "<script language=javascript>location.href='admin.php'</script>";
	}

}}





?>