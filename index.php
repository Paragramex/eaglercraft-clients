<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'/system/logging.php';
?>
<title>Redirecting...</title>
<div class="hero-image">
  <div class="hero-text">
    <h1>GET RICKED LOSER 🤣</h1>
   <p>You should be automatically redirected in <span id="seconds"></span> seconds.</p>
  </div>
</div>
<style>
body, html {
    height: 100%;
}

/* The hero image */
.hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://media.tenor.com/x8v1oNUOmg4AAAAd/rickroll-roll.gif");

  /* Set a specific height */
  height: 90%;
	

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Place text in the middle of the image */
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
</style>
<script>

var seconds = 5;
var foo;

function redirect() {
    document.location.href = '/home.php';
}

function updateSecs() {
    document.getElementById("seconds").innerHTML = seconds;
    seconds--;
    if (seconds == -1) {
        clearInterval(foo);
        redirect();
    }
}

function countdownTimer() {
    foo = setInterval(function () {
        updateSecs()
    }, 1000);
}

countdownTimer();</script>


<?php

$visitors = file_get_contents($path.'/db/visitcount.txt');
$visitors = $visitors+1;

file_put_contents($path.'/db/visitcount.txt',$visitors);





?>