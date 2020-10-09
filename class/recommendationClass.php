<?php

class Recommendation{
	
protected $conn;
protected $name;
protected $category;
	
public function productRecommended($db, $name, $description){
$this->conn = $db;
$this->name = $name;
$this->description = $description;

$sql = "SELECT * FROM product WHERE product_name = '$this->name' OR
            description = '%$this->description%' ";		
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