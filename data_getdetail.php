<?php
// created by Wei Wei

	include 'DBConn.php';

	$id = $_REQUEST['id']; // sanitize the followed query
	$query = "select * from libdb2 where id='$id'"; // get all data of selected record
	if (!$res = DBConn::getConnection()->query($query)) {
        die('There was an error running the query [' . $query->error . ']');
    }
    
    // get full format
    $row = $res->fetch_assoc();
    if ($row['format']=="C") {
    	$format = "Conference(C)";
    }elseif ($row['format']=="J") {
    	$format = "Journal(J)";
    }elseif ($row['format']=="R") {
    	$format = "Research Paper(R)";
    }elseif ($row['format']=="DT") {
    	$format = "Dissertation/Thesis(DT)";
        echo "Proquest ID: ".$row['proquestNo']."<br>";
    }else{
    	$format = $row['format'];
    }

	// print all the details of the selected record
    echo '<div class="data_detail">';
    echo "<p>[OVERVIEW]</p>";
	echo "<p>Title: ".$row['title']."</p>";
	echo "<p>Format: ".$format."</p>";
	echo "<p>Year: ".$row['year']."</p>";
	echo "<p>Author: ".$row['author1']."</p>";
	echo "<p>Classification: ".$row['class1']." ".$row['class2']." ".$row['class3']." "."</p>";
	echo "<p>Method: ".$row['method1']." ".$row['method2']." ".$row['method3']." "."</p>";
    echo "<p>Location that research took place:".$row['methodplace']." "."</p>";
	echo "<p>Abstract: ".$row['abstract']."</p>";
	echo "<p>Link:".'<a href="'.$row['source'].'"target="'.'_blank">'.$row['source']."</a></p>";
	echo "</div>";
	
?>


