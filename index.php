<!DOCTYPE html>
<html>
<head>
	
	<title>Pizza Rapido dolgozói felület</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="controller/login.php" method="post">
     	<h2>Bejelentkezés</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Felhasználónév</label>
     	<input type="text" name="nev" placeholder="Írd be a felhasználóneved" require="required"><br>

     	<label>Jelszó</label>
     	<input type="password" name="jelszo" placeholder="Írd be a jelszót" require="required"><br>

     	<button type="submit">Bejelentkezés</button>
     </form>
	 <?php
	require "view/layout/footer.php";
	?>
</body>
</html>