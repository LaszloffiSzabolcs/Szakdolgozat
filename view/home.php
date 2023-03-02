<?php 
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['nev']; ?></h1>
     <a href="index.php?page=login&action=logout">Logout</a>
     <?php
	require "view/layout/footer.php";
	?>
</body>
</html>

<?php 
}else{
     header("Location: index.php?page=login&action=login");
     exit();
}
 ?>