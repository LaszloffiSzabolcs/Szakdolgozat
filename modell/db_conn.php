<?php
Class DataBase{
private	$sname= "localhost";
private $uname= "c31laszloffidbu";
private $password = "kxwVwBA4!";
private $db_name = "c31laszloffidb";

private $conn;

function __construct() {
	// Create connection
	$conn = new mysqli($this->sname, $this->uname, $this->password, $this->db_name);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$this->conn = $conn;
}

public function dbSelect($sql) {
	if($result = $this->conn->query($sql)) {
		if ($result->num_rows > 0) {
			return $result; 
		  }
		  else {
			  return NULL;
		  }
	}
	elseif($this->conn->error) {
		die("SQL hiba: " . $this->conn->error);
	}
}
}


?>