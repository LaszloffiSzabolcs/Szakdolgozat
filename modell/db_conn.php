<?php

$sname= "localhost";
$uname= "c31laszloffidbu";
$password = "kxwVwBA4!";

$db_name = "c31laszloffidb";

$conn = mysqli_connect($sname, $uname, $password, $db_name);



if (!$conn) {
	echo "Sikertelen csatlakozás";
}