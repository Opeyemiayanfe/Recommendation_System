<?php

class Display{
protected $conn;

public function displayProduct($db){
	$this->conn = $db;
	$sql = "SELECT * FROM product";
	$stmt = $this->conn->query($sql);
	$result=$stmt->rowCount();
	if($result>0){
	while($row = $stmt->fetch()){
		$data[] = $row;
	}
	return $data;
	}
}
	
}


