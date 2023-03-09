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
    <label class="form-check-label text-white" for="flexRadioDefault2" >
      Szabadnap kérelme
    </label>
  </div>
</div><br>
<div class="row justify-content-center">
  <div class="col-sm-2">
  <div class="form-group date-input-container display-flex justify-content-center align-items-center">
  <label class="text-white">Mettől?</label>
  <input type="date" class="form-control rounded" id="kezdate" required pattern="\d{4}-\d{2}-\d{2}" required>
</div>
  </div>
  <div class="col-sm-2">
    <div class="form-group date-input-container display-flex justify-content-center align-items-center">
      <label class="text-white">Meddig?</label>
      <input type="date" class="form-control rounded" id="befdate" required pattern="\d{4}-\d{2}-\d{2}" required>
    </div>
  </div> 
</div> 
<div class="form-group d-flex justify-content-center">
  <div class="form-check mr-3">
    <input class="form-check-input" type="radio" name="muszak" value="1" id="ReggeliMusz" checked>
    <label class="form-check-label text-white" for="flexRadioDefault1">
      Reggeli műszak
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="muszak" value="2" id="DelutaniMusz">
    <label class="form-check-label text-white" for="flexRadioDefault2">
      Délutáni műszak
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="muszak" value="3" id="EstiMusz">
    <label class="form-check-label text-white" for="flexRadioDefault2">
      Esti Műszak
    </label>
  </div>
</div>
<br> <br><div class="col-sm-12">
    <div class="text-center">
      <button type="submit" class="btn btn-primary kicsi" onclick="Check()">Kérelem leadása</button>
    </div>
  </div>
  <script>
    function Check(){
        
        var muszak=document.querySelector('input[name="muszak"]:checked').value;

        var ido = new Date();
        var kezd=new Date(document.getElementById("kezdate").value);
        var bef = new Date(document.getElementById("befdate").value);
            if(kezd.length==0){
                alert("Adjon meg egy kezdő dátumot");
            }
            if(bef.length==0){
                alert("Adjon meg egy befejező dátumot");
            }
            if(kezd<ido){
                alert("Kezdő dátum nem lehet kisebb a mai dátumnál");
            }
    }

  </script>
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