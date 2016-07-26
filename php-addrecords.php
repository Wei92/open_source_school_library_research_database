<?php
include 'DBConn.php';
// test capcha
session_start();
$validate="";
if(isset($_GET["validate"])){
	$validate=$_GET["validate"];
	if($validate!=$_SESSION["authnum_session"]){
	//判断session值与用户输入的验证码是否一致;
	// capcha is wrong:
	echo "<font color=red>Capcha is wrong. Please re-enter the data.</font>";
	echo ""; 
	}else{
		// capcha is right, continue to insert sql into the database

		// avoid dangerous sql injection
		foreach ($_GET as $key => $value) {
			$value = mysql_real_escape_string($value);
		}

		$query = 'INSERT INTO libdb2 VALUES (\N,'.'"'.$_GET["title"].'", '.'"'.$_GET["format"].'", '.'"'.$_GET["year"].'", '. '"'.$_GET["author1"].'", '. '"'.$_GET["role1"].'", '. '"'.$_GET["affiliation1"].'", '. '"'.$_GET["author2"].'", '. '"'.$_GET["role2"].'", '. '"'.$_GET["affiliation2"].'", '. '"'.$_GET["author3"].'", '. '"'.$_GET["role3"].'", '. '"'.$_GET["affiliation3"].'", '. '"'.$_GET["author4"].'", '. '"'.$_GET["role4"].'", '. '"'.$_GET["affiliation4"].'", '. '"'.$_GET["author5"].'", '. '"'.$_GET["role5"].'", '. '"'.$_GET["affiliation5"].'", '. '"'.$_GET["country"].'", '. '"'.$_GET["conference"].'", '. '"'.$_GET["location"].'", '. '"'.$_GET["method1"].'", '. '"'.$_GET["method2"].'", '. '"'.$_GET["method3"].'", '. '"'.$_GET["source"].'", '. '"'.$_GET["abstract"].'", '. '"'.$_GET["class1"].'", '. '"'.$_GET["class2"].'", '. '"'.$_GET["class3"].'", '.'"1")';

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