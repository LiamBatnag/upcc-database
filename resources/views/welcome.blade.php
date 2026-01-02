<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->

<head>
<title>UPCC Database</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- style used for the header to make it maroon -->
<style>
  .bg-maroon {
      background-color: #6b1d1d !important;
      color: #ffffff !important;
  }

</style>
</head>
<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="{{ route('Pairings.index') }}" class="w3-bar-item w3-button">Games</a>
  <a href="{{ route('Players.index') }}" class="w3-bar-item w3-button">Players</a>
  <a href="{{ route('Tournaments.index') }}" class="w3-bar-item w3-button">Tournaments</a>
  <a href="/about" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Header -->
<header class="w3-container bg-maroon w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button bg-maroon"></i>
  <div class="w3-center">
  <h4>UP Chess Club</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">UP Chess Club Database</h1>
    <div class="w3-padding-32">
      <div class="w3-center">
        <img src="{{asset ('images/logo.png.webp')}}" style="width:250px" alt="">
        </div>
    </div>
  </div>
</header>

<!-- Modal -->

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:300px">
  <h3>Games</h3><br>
  <i class="fa fa-gamepad w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <br>
  
  <a href="{{ route('Pairings.index') }}" class="w3-button w3-theme w3-margin-top">
    Go to Games
  </a>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:300px">
  <h3>Players</h3><br>
  <i class="fa fa-users w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
<br>

  <a href="{{ route('Players.index') }}" class="w3-button w3-theme w3-margin-top">
    Go to Players
  </a>

  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:300px">
  <h3>Tournaments</h3><br>
  <i class="fa fa-trophy w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
 <br>

  <a href="{{ route('Tournaments.index') }}" class="w3-button w3-theme w3-margin-top">
    Go to Tournaments
  </a>

  </div>
</div>
</div>


<!-- Footer -->
<footer class="w3-center bg-maroon w3-padding-16">
  <p>© 2025 Liam Batnag</p>
</footer>



<!-- side navigation -->
<script>
// Side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "100%";
  x.style.fontSize = "40px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
