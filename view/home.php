<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nev'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['nev']; ?></h1>
     <a href="logout.php">Logout</a>
     <?php
	require "view/layout/footer.php";
	?>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>