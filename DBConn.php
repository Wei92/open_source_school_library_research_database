<?php

class DBConn{

	const HOST = 'localhost';
	const USER = 'wwei1';
	const PASSWORD = 'blazoning,deceive}atrocious{';
	const DATABASE = 'wwei1db';

	private static $mysql;

	private function __construct(){}

	public static function getConnection(){
		if( empty(self::$mysql) ){
			self::$mysql = new MySQLi(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
			self::$mysql->set_charset('utf8'); 
			//echo "string\n";
		}else{
			echo "Error-text: " . $mysql->error . "<br> \n";
			echo "Error-number: " . $mysql->errno . "<br> \n";
		}

		// returen the connection to the client
		return self::$mysql;
	}

}



?>