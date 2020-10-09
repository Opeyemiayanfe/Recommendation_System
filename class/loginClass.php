<?php
session_start();

class loginPage {
    private $conn;
    private $email;
    private $password;
    
    public function __construct($db, $email, $password){
    $this->conn = $db;
	$this->email = $email;
	$this->password = $password;
    }

	public function Login(){
		//error handler
	if(empty($this->email)||empty($this->password)){
		header('Location: login.php?emptyFields');
	}
	else {
	$sql = "SELECT * FROM signup WHERE email =?";
	$stmt = $this->conn->prepare($sql);
	$stmt->bindParam(1, $this->email);
	$stmt->execute();
	$num = $stmt->rowCount();
	if($num<1){
		header('Location:login.php?emailNotExisting');
	}
	else{
			$names = $stmt->fetchAll();
			foreach($names as $name){
				$pwd = $name['password'];
				$pwdchecked = password_verify($this->password, $pwd);
				if($pwdchecked == false){
					header('Location:login.php?incorrectPassword');
				}
				elseif($pwdchecked == true){
					if($name['role'] == 'admin'){
					$_SESSION['u_id'] = $name['id'];
					$_SESSION['role'] = $name['role'];
					header('Location:adminLogin.php?adminloginsuccessful');
					}
					else{
						$_SESSION['u_id'] = $name['id'];
					header('Location:index.php?loginsuccessful');
					}
					
				}
			}
		}
	
	}		
	}
}
