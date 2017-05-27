<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$db_name = 'book_db';

	$connect = mysqli_connect($hostname, $username, $password, $db_name);

	if(!$connect){
		echo 'Database not found';
	}

// class database{
// 	private $hostname = 'localhost';
// 	private $username = 'root';
// 	private $password = '';
// 	private $db_name = 'book_db';
// 	private $connect;

// 	public function __construct(){
// 		$this -> connect = mysqli_connect($this -> hostname, $this -> username, $this -> password, $this -> db_name);

// 		if(!$this -> connect){
// 			echo 'Database not found';
// 		}
// 	}
	// public function select($table, $column = "*", $id = NULL, $whereColumn = NULL, $search=NULL, $orderByColumn = NULL, $ABC_DESC = NULL, $limit = NULL, $offset = NULL){
	// 	if($this->connect){
	// 		$sql = "SELECT $column FROM $table ";

	// 		if ($id != NULL) {
	// 			$sql .= ' WHERE id='.$id;
	// 		}
	// 		if ($whereColumn != NULL) {
	// 			$sql .= ' WHERE '.$whereColumn;
	// 		}
	// 		if ($search != NULL) {
	// 			$sql .= " LIKE "."'%".$search."%'";
	// 		}
	// 		if ($orderByColumn != NULL || $ABC_DESC != NULL) {
	// 			$sql .= ' ORDER BY '.$orderByColumn.' '.$ABC_DESC;
	// 		}
	// 		if ($limit != NULL) {
	// 			$sql .= " LIMIT ".$limit;
	// 		}
	// 		if ($offset != NULL) {
	// 			$sql .= " OFFSET ".$offset;
	// 		}


	// 		$query = mysqli_query($this -> connect, $sql);
	// 		return $query;
	// 	}else{
	// 		echo'Error';
	// 	}
	// }
	// public function update($table, $column, $id){
	// 	if($this->connect){
	// 		$sql = "UPDATE $table SET $column WHERE id=$id";
	// 		$query = mysqli_query($this -> connect, $sql);
			
	// 	}else{
	// 		echo'Error';
	// 	}
	// }
	// public function delete($table, $id){
	// 	if($this->connect){
	// 		$sql = "DELETE FROM $table WHERE id=$id";
	// 		$query = mysqli_query($this -> connect, $sql);
	// 	}else{
	// 		echo'Error';
	// 	}
	// }
	// public function insert($table, $column, $columnName){
	// 	if($this->connect){
			
	// 		$sql = "INSERT INTO $table($column) VALUES ($columnName)";
	// 		$query = mysqli_query($this -> connect, $sql);
	// 		return $sql;

	// 	}else{
	// 		echo'Error';
	// 	}
	// }
	// public function slug($slug){
	// 	$a = '/[^\-\s\pN\pL]+/u';
	// 	$b = '/[\-\s]+/';
	// 	$slug = preg_replace($a, '', mb_strtolower($slug, 'UTF-8'));
	// 	$slug = preg_replace($b, '-', $slug);
	// 	$slug = trim($slug, '-');

	// 	return $slug;
	// }
// }
