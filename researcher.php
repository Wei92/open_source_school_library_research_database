<?php include "header.php" ?>

	<div class="nav">
		<ul>
			<li><a href="index.php" >Introduction</a></li>
			<li><a href="student.php" >For students</a></li>
			<li><a href="researcher.php" id="hover">For researchers</a></li>
			<li><a href="contact.php">Contact us</a></li>
		</ul>
		<div class="clear"></div>
	</div>


<div class="main">
	<p>Hi! As a researcher, you can not only browse and search the data in the database, but also make your own contribution.</p>
	<br>
	<div class="btn-addrecords"><a href="addrecords.php">Click here to add records into the database.</a></div>
	<br>
<?php include "datalist.php" ?>

</div>


<?php  include "footer.php" ?>


