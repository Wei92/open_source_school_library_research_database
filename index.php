

<!DOCTYPE html>
<html>
<head>
	<title>Open Source School Library Research Database </title>
	<style type="text/css">
		td{text-align:center;width:200px;height:50px;padding:3px;}	
	</style>
</head>
<body>

<form action="get_table.php" method="get">
	<table border='1'cellspacing="0" cellpadding="0">
		<!--fields:-->
		<?php
			require_once 'autoload.php';
			$mytable = new Table;
			
			// get the field names
			echo "<tr>";
			foreach ($mytable->columns as $key => $value) {
				echo "<th>$key</th>";
			}
			echo "</tr>";

			// get all records
			$mytable->getAllRecords();	
		?>

	</table>
</form>


</body>
<script type="text/javascript"></script>
</html>