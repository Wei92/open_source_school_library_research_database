<?php
// created by Wei Wei
include 'DBConn.php';
class Table{
	//public $columns = array();
	public $records = array();

	public $mysql;
	
	protected $table = "libdb2";

	protected $items = array();

	public function __construct(){
		$this->mysql = DBConn::getConnection(); // get connection
	}

	/*public function getCollums(){
		$query = "DESC {$this->table}";
		$result = $this->mysql->query($query);

		while ($row = $result->fetch_assoc()) {
			$this->columns[$row['Field']] = null;
		}
		//print_r($this->columns);
		return $this->columns;
	}*/



	public function getAllRecordsInJson(){
		// get deleted records
		$query = "SELECT * FROM {$this->table}";                          
		$result = $this->mysql->query($query);
		while ($row = $result->fetch_assoc()) {
			array_push($this->items, $row);
		}
		echo json_encode($this->items);
	}

	public function getCfmRecordsInJson(){
		$query = "SELECT * FROM {$this->table} where auth='0'";                          
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

	public function getNotCfmRecordsInJson(){
		// get confirmed records
		$query = "SELECT * FROM {$this->table} where auth='1'";                          
		$result = $this->mysql->query($query);
		while ($row = $result->fetch_assoc()) {
			array_push($this->items, $row);
		}

		echo json_encode($this->items);
	}

	public function getDltRecordsInJson(){
		// get deleted records
		$query = "SELECT * FROM {$this->table} where auth='2'";                          
		$result = $this->mysql->query($query);
		while ($row = $result->fetch_assoc()) {
			array_push($this->items, $row);
		}
		echo json_encode($this->items);
	}

	public function getRecordDetail($id){
		$query = "SELECT * FROM {$this->table} where id=$id";                          
		$result = $this->mysql->query($query);
		while ($row = $result->fetch_assoc()) {
			array_push($this->items, $row);
		}
		echo json_encode($this->items);
	}

}


?>