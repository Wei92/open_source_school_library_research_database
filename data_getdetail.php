<?php
	include 'DBConn.php';

	$id = $_REQUEST['id'];
	$query = "select * from libdb where id='$id'";
	if (!$res = DBConn::getConnection()->query($query)) {
        die('There was an error running the query [' . $query->error . ']');
    }
    $row = $res->fetch_assoc();
    echo '<div class="data_detail">';
	echo "<p>Title: ".$row['title']."</p>";
	echo "<p>Format: ".$row['format']."</p>";
	echo "<p>Year: ".$row['year']."</p>";
	echo "<p>Author: ".$row['author1']."</p>";
	echo "<p>Abstract: ".$row['abstract']."</p>";
	echo "<p>Link: ".'<a href="'.$row['source'].'"target="'.'_blank">'.$row['source']."</a></p>";
	echo "</div>";
	
?>


