<?php
class Dbh {
	
private $host = "localhost";
private $dbname = "onlineclothing";
private $username = "root";
private $password = "";
private $conn;

public function connect(){
$this->conn = "";
        try{
        $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, 
        $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
        echo 'connection error:'. $e->getMessage();
        }
        return $this->conn;
    }

}