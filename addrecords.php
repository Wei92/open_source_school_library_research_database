<?php 
include "header.php";
session_destroy();
session_start();

?>
	<div class="nav">
		<ul>
			<li><a href="index.php" >Introduction</a></li>
			<li><a href="student.php" >For students</a></li>
			<li><a href="researcher.php">For researchers</a></li>
			<li><a href="contact.php">Contact us</a></li>
		</ul>
		<div class="clear"></div>
	</div>


<div class="main">
	<h2 style="color:#fd7279">Add records</h2>
	<p>Hi! Please complete the following form to submit the record.</p><br>
	<form action="php-addrecords.php" method="get" id="addrecords" name="addrecords">
		<table class="table-left">
			<tr><td colspan="2" style="font-weight: bold;">These forms are mandatory:</td></tr>
			<tr> <td>Title:</td> <td><input type="text" size=50 name="title"></td> </tr>

			<tr> <td>Format:</td> <td><select name="format"><option value="C">Conference(C)</option><option value="J">Journals(J)</option><option value="DT">Dissertations/Thesis(DT)</option><option value="R">Research papers(R)</option></select> </td> </tr>

			<tr> <td>Year:</td> <td><input name="year" type="text" size="4" maxlength="4" onkeyup='this.value=this.value.replace(/\D/gi,"")'></td> </tr>

			<tr> <td>Author1:</td> <td><input name="author1" type="text" size="50"></td> </tr>
			<tr> <td>Role1:</td> <td><input name="role1" type="text" size="50"></td> </tr>
			<tr> <td>Affliation1:</td> <td><input name="affliation1" type="text" size="50"></td> </tr>

			<tr> <td>Country:</td> <td><input type="text" name="country" size="50"></td> </tr>

			<tr> <td>Insititusion:</td> <td><input type="text" name="conference" size="50"></td> </tr>

			<tr> <td>Location:</td> <td><input type="text" name="location" size="50"></td> </tr>

			<tr> <td>Method1:</td> <td><input type="text" name="method1" size="50"></td> </tr>
			<tr> <td>Method2:</td> <td><input type="text" name="method2" size="50"></td> </tr>
			<tr> <td>Method3:</td> <td><input type="text" name="method3" size="50"></td> </tr>

			<tr> <td>Source:</td> <td><input type="text" name="method1" size="50"></td> </tr>

			<tr> <td>Abstract:</td> <td> <textarea cols="49" rows="4" id="regintro" name="abstract"></textarea></td> </tr>

			<tr> <td>Class1:</td> <td><input type="text" name="class1" size="50"></td> </tr>
			<tr> <td>Class2:</td> <td><input type="text" name="class2" size="50"></td> </tr>
			<tr> <td>Class3:</td> <td><input type="text" name="class3" size="50"></td> </tr>
			<tr> <td>CAPTCHA BELOW:</td> <td><input type="text" name="validate" value="" size=10> </td> </tr>
			<tr> <td colspan="2"><img  style="width:150px;margin-left:-1px" title="click to refresh" src="captcha.php" align="absbottom" onclick="this.src='captcha.php?'+Math.random();"></img>
</td> </tr>
		</table>
		
		<table class="table-right" >
		<tr><td colspan="2" style="font-weight: bold;">These forms are optional:</td></tr>
			<tr> <td>Author2:</td> <td><input name="author2" type="text" size="50"></td> </tr>
			<tr> <td>Role2:</td> <td><input name="role2" type="text" size="50"></td> </tr>
			<tr> <td>Affliation2:</td> <td><input name="affliation2" type="text" size="50"></td> </tr>

			<tr> <td>Author3:</td> <td><input name="author3" type="text" size="50"></td> </tr>
			<tr> <td>Role3:</td> <td><input name="role3" type="text" size="50"></td> </tr>
			<tr> <td>Affliation3:</td> <td><input name="affliation3" type="text" size="50"></td> </tr>

			<tr> <td>Author4:</td> <td><input name="author4" type="text" size="50"></td> </tr>
			<tr> <td>Role4:</td> <td><input name="role4" type="text" size="50"></td> </tr>
			<tr> <td>Affliation4:</td> <td><input name="affliation4" type="text" size="50"></td> </tr>

			<tr> <td>Author5:</td> <td><input name="author5" type="text" size="50"></td> </tr>
			<tr> <td>Role5:</td> <td><input name="role5" type="text" size="50"></td> </tr>
			<tr> <td>Affliation5:</td> <td><input name="affliation5" type="text" size="50"></td> </tr>
		</table>

		
		<input type="submit" id="addsubmit" name="addsubmit" value="Confirmed the information and submit them to administrators" />
		

		<div class="clear"></div>
	</form>

</div>


<?php  include "footer.php" ?>


