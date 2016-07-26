<?php
// created by Wei Wei
// this is a file to change csv file into json

include 'Table.php';

/*function utf8_encode_clever($array) {
    if(is_array($array)) 
        {
        return array_map("utf8_encode_clever", $array);
        }
    else
        {
        return utf8_encode($array);
        }
}*/


$data = array();
$file = fopen("data.csv","r");

while(! feof($file))
{
	$arr = fgetcsv($file);
	for ($i=0; $i <22 ; $i++) { 
		array_pop($arr);
	}

	//print_r($arr);

	foreach ($arr as $key => $value) {
		//$arr[$key] = utf8_encode_clever($value);
		$arr[$key]=addslashes($value);
	}
	
	//array_push($data, $arr);
	//$collums = $mytable->getCollums();
	//print_r($collums);
	$connect = mysql_pconnect('localhost', 'wwei1' , 'blazoning,deceive}atrocious{');
	mysql_select_db('wwei1db',$connect);

	$query = "INSERT INTO libdb2 VALUES (\N, '$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]','$arr[5]' ,'$arr[6]'' ,'$arr[7]','$arr[8]','$arr[9]','$arr[10]','$arr[11]','$arr[12]','$arr[13]','$arr[14]','$arr[15]','$arr[16]','$arr[17]','$arr[18]','$arr[19]','$arr[20]','$arr[21]','$arr[22]','$arr[23]','$arr[24]','$arr[25]','$arr[26]' ,'$arr[27]','$arr[28]')";
	echo "$query";
	mysql_query($query);



}
fclose($file);
	
//echo json_encode($data);
//print_r($data);


?>