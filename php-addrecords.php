<?php
// created by Wei Wei
include 'DBConn.php';
// test capcha
session_start();
$validate="";
if(isset($_POST["validate"])){
	$validate=$_POST["validate"];
	if($validate!=$_SESSION["authnum_session"]){
	//判断session值与用户输入的验证码是否一致;
	// capcha is wrong:
	echo "<font color=red>Capcha is wrong. Please re-enter the data.</font>";
	echo ""; 
	}else{
		// capcha is right, continue to insert sql into the database

		// avoid dangerous sql injection
		foreach ($_POST as $key => $value) {
			$value = mysql_real_escape_string($value);
		}

		$content = array();
		$content = $_POST;

		foreach ($content as $key => $value) {
			$content[$key] = addslashes($value);
		}

		$query = "INSERT INTO libdb2 VALUES(\N,'{$content['title']}','{$content['format']}','{$content['year']}','{$content['author1']}','{$content['role1']}','{$content['affiliation1']}','{$content['author2']}','{$content['role2']}','{$content['affiliation2']}','{$content['author3']}','{$content['role3']}','{$content['affiliation3']}','{$content['author4']}','{$content['role4']}','{$content['affiliation4']}','{$content['author5']}','{$content['role5']}','{$content['affiliation5']}','{$content['country']}','{$content['conference']}','{$content['location']}','{$content['method1']}','{$content['method2']}','{$content['method3']}','{$content['source']}','{$content['abstract']}','{$content['class1']}','{$content['class2']}','{$content['class3']}','1')";

		//echo "<br>".$query;

		// insert 
		if (!$res = DBConn::getConnection()->query($query)) {
			//echo $query;
        	die('There was an error running the query [' . $query->error . ']');
    	}else{
    		//echo $query;
    		echo "<font color=green>Successfully add your records to our administrators. They will confirm the data as soon as possible. Thank you!</font>"; 
    		echo '<br><a href="'.'index.php'.'">Click here to the homepage of OSSLRD';
    	}
		//echo "<font color=green>Success</font>"; 
	}
} 


//INSERT INTO libdb2 VALUES (\N, '', '', '', '', '', '', , , , , , , , , , , , ,'','','','', '', ,'','','',  ,  ,1);

?>