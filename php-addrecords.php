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

		$query = 'INSERT INTO libdb2 VALUES (\N,'.'"'.$_POST["title"].'", '.'"'.$_POST["format"].'", '.'"'.$_POST["year"].'", '. '"'.$_POST["author1"].'", '. '"'.$_POST["role1"].'", '. '"'.$_POST["affiliation1"].'", '. '"'.$_POST["author2"].'", '. '"'.$_POST["role2"].'", '. '"'.$_POST["affiliation2"].'", '. '"'.$_POST["author3"].'", '. '"'.$_POST["role3"].'", '. '"'.$_POST["affiliation3"].'", '. '"'.$_POST["author4"].'", '. '"'.$_POST["role4"].'", '. '"'.$_POST["affiliation4"].'", '. '"'.$_POST["author5"].'", '. '"'.$_POST["role5"].'", '. '"'.$_POST["affiliation5"].'", '. '"'.$_POST["country"].'", '. '"'.$_POST["conference"].'", '. '"'.$_POST["location"].'", '. '"'.$_POST["method1"].'", '. '"'.$_POST["method2"].'", '. '"'.$_POST["method3"].'", '. '"'.$_POST["source"].'", '. '"'.$_POST["abstract"].'", '. '"'.$_POST["class1"].'", '. '"'.$_POST["class2"].'", '. '"'.$_POST["class3"].'", '.'"1")';

		//echo "<br>".$query;

		// insert 
		if (!$res = DBConn::getConnection()->query($query)) {
        	die('There was an error running the query [' . $query->error . ']');
    	}else{
    		echo "<font color=green>Successfully add your records to our administrators. They will confirm the data as soon as possible. Thank you!</font>"; 
    		echo '<br><a href="'.'index.php'.'">Click here to the homepage of OSSLRD';
    	}
		//echo "<font color=green>Success</font>"; 
	}
} 


//INSERT INTO libdb2 VALUES (\N, '', '', '', '', '', '', , , , , , , , , , , , ,'','','','', '', ,'','','',  ,  ,1);

?>