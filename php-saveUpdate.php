<?php
// created by Wei Wei
include "DBConn.php";

$id = $_REQUEST['id'];
$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);
$_POST = parse_str($rest_json, $parameters);

foreach ($parameters as $key => $value) {
	$value = mysql_real_escape_string($value);
	$value = addslashes($value);
}

$query = "update libdb2 set title='{$parameters['title']}',format='{$parameters['format']}',year='{$parameters['year']}',author1='{$parameters['author1']}',role1='{$parameters['role1']}',affiliation1='{$parameters['affiliation1']}',author2='{$parameters['author2']}',role2='{$parameters['role2']}',affiliation2='{$parameters['affiliation2']}',author3='{$parameters['author3']}',role3='{$parameters['role3']}',affiliation3='{$parameters['affiliation3']}',author4='{$parameters['author4']}',role4='{$parameters['role4']}',affiliation5='{$parameters['affiliation5']}',author5='{$parameters['author5']}',role5='{$parameters['role5']}',affiliation5='{$parameters['affiliation5']}',country='{$parameters['country']}',conference='{$parameters['conference']}',location='{$parameters['location']}',method1='{$parameters['method1']}',method2='{$parameters['method2']}',method3='{$parameters['method3']}',source='{$parameters['source']}',abstract='{$parameters['abstract']}',class1='{$parameters['class1']}',class2='{$parameters['class2']}',class3='{$parameters['class3']}',auth='".$parameters['auth']. "' where id={$id}";

if (!$res = DBConn::getConnection()->query($query)) {
    die('There was an error running the query [' . $query->error . ']');
    echo json_encode(array('errorMsg' => 'Some errors occured.'));
}



?>