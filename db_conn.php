<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "etterem_belepes";

$conn = mysqli_connect($sname, $uname, $password, $db_name);



if (!$conn) {
	echo "Sikertelen csatlakozás";
}