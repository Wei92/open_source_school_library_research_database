<?php
// created by Wei Wei
// webpage
session_destroy();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="main">
<h1 style="color:#aaa; font-size:17px">This page only works for the administrators.</h1><br><br>
<table class="table-left">
	<form action="php_adminlogin.php" method="post">
		<tr><td colspan="2" style="font-weight: bold;">Log in here:</td></tr>
		<tr> <td colspan="2" style="color:red"><?php echo $_COOKIE['alertlog']?></td></tr>
		<tr> <td>Username:</td> <td><input type="text" size=50 name="username" onkeyup="value=value.replace(/[\W]|[_]/g,'')"></td></tr>
		<tr> <td>Password:</td> <td><input type="password" size=50 name="password"></td> </tr>
		<tr> <td>Reference:</td> <td><input type="text" size=50 name="ref"></td> </tr>
		<tr> <td>CAPTCHA BELOW:</td> <td><input required="true" class="easyui-validatebox" type="text" name="validate" value="" size=10> </td> </tr>
		<tr><td></td><td><input type="submit" id="login" name="login" value="Log In" /></td></tr>
	</form>
</table>

<table class="table-right">
	<form action="php_adminsignup.php" method="post">
		<tr><td colspan="2" style="font-weight: bold;">Sign up here:</td></tr>
		<tr> <td colspan="2" style="color:red"><?php echo $_COOKIE['alertsign']?></td></tr>
		<tr> <td>Username:</td> <td><input type="text" size=50 name="username" onkeyup="value=value.replace(/[\W]|[_]/g,'')"><br><span style="color:#ccc;display: block;margin-bottom: 8px">Only words or numbers are allowed for username</span></td></tr>
		

		<tr> <td>Password:</td> <td><input type="password" size=50 name="password" id="pwd1"></td> </tr>
		<tr> <td>Retype Password:</td> <td><input type="password" size=50 name="password2" id="pwd2" onkeyup="vali()"><br><span id="suggest"></span></td> </tr>
		

		<tr> <td>Reference Number1:</td> <td><input type="text" size=50 name="ref1"></td> </tr>
		<tr> <td>Reference Number2:</td> <td><input type="text" size=50 name="ref2"></td> </tr>
		<tr> <td>CAPTCHA BELOW:</td> <td><input required="true" class="easyui-validatebox" type="text" name="validate" value="" size=10> </td> </tr>
		<tr><td></td><td><input type="submit" id="signup" name="signup" value="Sign Up" /></td></tr>
	</form>
</table>

<img  style="clear:both;width:150px;margin-left:36.5%; margin-top: 20px" title="click to refresh" src="captcha.php" align="absbottom" onclick="this.src='captcha.php?'+Math.random();"></img>

</div>

</body>

<script>
  // validate pwd1 and pwd2
  function vali(){
      var pwd1 = document.getElementById("pwd1").value;
      var pwd2 = document.getElementById("pwd2").value;
      if(pwd1 == pwd2) {
        document.getElementById("suggest").innerHTML="<font color='green'>Password is validate</font>";
        document.getElementById("signup").disabled = false;
      }
      else {
        document.getElementById("suggest").innerHTML="<font color='red'>Two passwords are different</font>";
        document.getElementById("signup").disabled = true;
      }
  }
</script>

</html>














