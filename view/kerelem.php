<?php 
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kérelmek</title>
     <link rel="stylesheet" type="text/css" href="home.css">
     <link rel="stylesheet" type="text/css" href="calendar.css">
</head>
<body>
     <?php
     require "view/layout/header.php";
     ?>
     <br>
     <h1>Másmásmás</h1>
     <div class="center">
     <div class="calendar light">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">April</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2023</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Vasárnap</div>
                <div>Hétfő</div>
                <div>Kedd</div>
                <div>Szerda</div>
                <div>Csütörtök</div>
                <div>Péntek</div>
                <div>Szombat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
       
        <div class="month-list"></div>
    </div>
</div>
<br>

<div class="form-group d-flex justify-content-center">
  <div class="form-check mr-3">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Munkanapkerelem" checked>
    <label class="form-check-label text-white" for="flexRadioDefault1">
      Munkanap kérelme
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Szabadnapkerelem">
    <label class="form-check-label text-white" for="flexRadioDefault2">
      Szabadnap kérelme
    </label>
  </div>
</div><br>
    <div class="form-group date-input-container d-flex justify-content-center align-items-center">
        <label class="text-white">Mettől?</label>
        <input type="date" class="form-control rounded" id="kezdate" required>
    </div>
    <script src="calendar.js"></script>
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