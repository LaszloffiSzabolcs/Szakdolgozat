<?php 
session_start(); 
include "modell/db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ..view/home.php?error=Felhasználónév szükséges");
	    exit();
	}else if(empty($pass)){
        header("Location: ..view/home.php?error=Jelszó szükséges");
	    exit();
	}else{
		$sql = "SELECT * FROM felhasznalo WHERE nev='$uname' AND jelszo='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['felhasznalonev'] === $uname && $row['jelszo'] === $pass) {
            	$_SESSION['felhasznalonev'] = $row['felhasznalonev'];
            	$_SESSION['nev'] = $row['nev'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../view/home.php");
		        exit();
            }else{
				header("Location: ..view/home.php?error=Rossz felhasználónév vagy jelszó");
		        exit();
			}
		}else{
			header("Location: ..view/home.php?error=Rossz felhasználónév vagy jelszó");
	        exit();
		}
	}
	
}else{
	header("Location: ../view/home.php");
	exit();
}