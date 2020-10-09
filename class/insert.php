<?php
session_start();

class insert {
    private $conn;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    
    public function __construct($db, $first, $last, $email, $password){
    $this->conn = $db;
	$this->firstname = $first;
	$this->lastname = $last;
	$this->email = $email;
	$this->password = $password;
    }

	public function insertData(){
		//error handler
	if(empty($this->firstname)){
		header('Location: sign.php?emptyFields');
	}
	else {
	$sql = "SELECT * FROM signup WHERE email = ?";
	$stmt = $this->conn->prepare($sql);
	$stmt->bindParam(1, $this->email);
	$stmt->execute();
	$num = $stmt->rowCount();
	if($num>0){
		header('Location:sign.php?emailTaken');
	}
	//insert into database
	else{
		$query = 'INSERT INTO signup (firstname, lastname, email, password) VALUES (?,?,?,?)';
		$hashedpwd = password_hash($this->password, PASSWORD_DEFAULT);
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->firstname);
		$stmt->bindParam(2, $this->lastname);
		$stmt->bindParam(3, $this->email);
		$stmt->bindParam(4, $hashedpwd);
		$stmt->execute();
		
		$querying = "SELECT * FROM signup WHERE email = ?";
		$stmt = $this->conn->prepare($querying);
		$stmt->execute([$this->email]);
		$names = $stmt->fetchAll();
		foreach($names as $name){
		$_SESSION['u_id']=$name['id'];
		header("Location:index.php?success=Signupsuccess");
		}
	
	}		
	}
}
}