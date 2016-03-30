<?php

class Table{
	public $columns = array();
	public $records = array();

	protected $mysql;
	protected $table = "libdb";

	public function __construct(){
		$this->mysql = DBConn::getConnection(); // get connection
		$query = "DESC {$this->table}";
		$result = $this->mysql->query($query);

		while ($row = $result->fetch_assoc()) {
			$this->columns[$row['Field']] = null;
		}
		//print_r($this->columns);
	}

	public function getAllRecords(){
		$query = "SELECT * FROM {$this->table}";
		$result = $this->mysql->query($query);
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			foreach ($row as $key => $value) {
				echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
		}

	}
}

?>