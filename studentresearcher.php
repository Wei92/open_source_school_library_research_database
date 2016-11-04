<?php include "header.php" ?>
	

	<div class="nav">
		<ul>
			<li><a href="index.php" >Introduction</a></li>
			<li><a href="javascript:void(0)" class="student" id="hover" onclick='change("1")'>For students</a></li>
			<li><a href="javascript:void(0)" class="researcher" onclick='change("2")'>For researchers</a></li>
			<li><a href="contact.php">Contact us</a></li>
		</ul>
		<div class="clear"></div>
	</div>


<div class="main">
	<p class="hi-s">Hi! As a student, you can browse and search the data in the database.</p>
	<p class="hi-r" hidden="true">Hi! As a researcher, you can not only browse and search the data in the database, but also make your own contribution.</p>


	<br>
	<div class="btn-addrecords" hidden="true"><a href="addrecords.php">Click here to add records into the database.</a></div>
	<br>
<?php include "datalist.php" ?>

</div>

<?php  include "footer.php" ?>


