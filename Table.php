<?php
include 'DBConn.php';
class Table{
	public $columns = array();
	public $records = array();

	protected $mysql;
	protected $table = "libdb";

	protected $items = array();

	public function __construct(){
		$this->mysql = DBConn::getConnection(); // get connection
	}

	public function getCollums(){
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

	public function getAllRecordsInJson(){
		$query = "SELECT * FROM {$this->table}";                          
		$result = $this->mysql->query($query);
		while ($row = $result->fetch_assoc()) {
			//echo json_encode($row);
			//print_r($row);
			//foreach ($row as $key => $value) {
				//echo json_encode($value);			}
			array_push($this->items, $row);
		}
		//$result[] = $this->items;
		echo json_encode($this->items);
	}
}

$mytable = new Table;
$mytable->getAllRecordsInJson();




?>