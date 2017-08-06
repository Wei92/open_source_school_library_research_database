<?php 
// created by Wei Wei
// webpage
include "header.php" ?>

	<div class="nav">
		<ul>
			<li><a href="index.php" id="hover">Introduction</a></li>
			<li><a href="studentresearcher.php?ii=1">For students</a></li> <!--send data to studentresearcher.php, showing which tab the user clicked-->
			<li><a href="studentresearcher.php?ii=2">For researchers</a></li> <!--send data to studentresearcher.php, showing which tab the user clicked-->
			<li><a href="contact.php">Contact us</a></li>
		</ul>
		<div class="clear"></div>
	</div>


<div class="main">
	<img src="images/illu2.png">
	<p>This is an open source database for both students and researchers <span class="span">in the field of School Library</span>.</p><br>
	<p>If you are a student, click on <a href="studentresearcher.php?ii=1">"For students"</a> above and <span class="span">browse and search </span>the data.</p><br>
	<p>If your are a researcher, click on <a href="studentresearcher.php?ii=2">"For researchers"</a> above. You could not only <span class="span">browse and search</span> the data, but also <span class="span">contribute your records to the database</span>. To ensure the quality of the database, your submission will be sent to our administrators directly. They will evaluate the records as soon as possible. Once your record is confirmed, the system will send an email to you automatically.</p>
	<br>
	<p>For more information, please click on <a href="contact.php">"Contact us"</a>.</p>
	<div class="clear"></div>
</div>


<?php  include "footer.php" ?>


