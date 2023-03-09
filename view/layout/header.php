<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
  <a class="navbar-brand" href="index.php?page=home">Home</a>
  <a class="navbar-brand" href="index.php?page=kerelem">Kérelmek</a>
  <div class="ms-auto">
    <div class="dropdown">
      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo $_SESSION['username'];?>
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">placeholder</a></li>
        <li><a class="dropdown-item" href="index.php?page=login&action=logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

</nav>
</body>
</html>

