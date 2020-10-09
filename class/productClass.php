<?php
	class Product{
	protected $Name;
	protected $description;
	protected $size;
	protected $price;
	protected $listprice;
	protected $category;
	protected $fileNewName;
	protected $conn;
	
		public function __construct($db, $name, $description, $size, $price, $listprice, $category, $image){
			$this->conn = $db;
			$this->name = $name;
			$this->description = $description;
			$this->size = $size;
			$this->price = $price;
			$this->listprice = $listprice;
			$this->category = $category;
			$this->fileNewName = $image;
			
		}
		public function addProduct(){
			if(empty($this->name)||empty($this->description)||empty($this->size)||empty($this->price)
				||empty($this->listprice)||empty($this->category)||empty($this->fileNewName)){
				header('Location:adminLogin.php?emptyFields');
			}
			else{
			$query = "INSERT INTO product (product_name, description, size, price, listprice, category, product_image) VALUES(?,?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($query);
			$stmt->bindParam(1, $this->name);
			$stmt->bindParam(2, $this->description);
			$stmt->bindParam(3, $this->size);
			$stmt->bindParam(4, $this->price);
			$stmt->bindParam(5, $this->listprice);
			$stmt->bindParam(6, $this->category);
			$stmt->bindParam(7, $this->fileNewName);
            $stmt->execute();
			header('Location:adminLogin.php?productAddedSuccessful');
			}
		}
	}
	