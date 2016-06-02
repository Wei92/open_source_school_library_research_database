<!DOCTYPE html>
<html>
<head>
	<title>Welcome page for administrators</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="main">
<h1 style="color:#aaa; font-size:17px">This page only works for the administrators.</h1><br><br>
<table class="table-left">
	<form action="php_adminlogin.php" method="post">
		<tr><td colspan="2" style="font-weight: bold;">Log in here:</td></tr>
		<tr> <td colspan="2" style="color:red"><?php echo $_COOKIE['alertlog']?></td></tr>
		<tr> <td>Username:</td> <td><input type="text" size=50 name="username"></td> </tr>
		<tr> <td>Password:</td> <td><input type="password" size=50 name="password"></td> </tr>
		<tr><td></td><td><input type="submit" id="login" name="login" value="Log In" /></td></tr>
	</form>
</table>

<table class="table-right">
	<form action="php_adminsignup.php" method="post">
		<tr><td colspan="2" style="font-weight: bold;">Sign up here:</td></tr>
		<tr> <td colspan="2" style="color:red"><?php echo $_COOKIE['alertsign']?></td></tr>
		<tr> <td>Username:</td> <td><input type="text" size=50 name="username"></td> </tr>
		<tr> <td>Password:</td> <td><input type="text" size=50 name="password"></td> </tr>
		<tr> <td>Reference Number1:</td> <td><input type="password" size=50 name="ref"></td> </tr>
		<tr> <td>Reference Number2:</td> <td><input type="password" size=50 name="ref"></td> </tr>
		<tr><td></td><td><input type="submit" id="signup" name="signup" value="Sign Up" /></td></tr>
	</form>

</table>

</div>

</body>
</html>
