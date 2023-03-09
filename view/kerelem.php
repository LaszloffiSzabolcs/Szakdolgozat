<?php 
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kérelmek</title>
     <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
     <?php
     require "view/layout/header.php";
     ?>
     <br>
     <h1>Másmásmás</h1>
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