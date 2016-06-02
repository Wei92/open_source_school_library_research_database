<?php

$ref1 = "$%^T&FGH90JKY5ThU(*FVGHBJNM";
$ref2 = "edmonton".date("Ymd");
foreach ($_POST as $key => $value) {
	$value = mysql_escape_string($value);
}


setcookie("alertsign", "Log in failed, please retry", time()+10);
echo "<script language=javascript>location.href='admin.php'</script>";


?>