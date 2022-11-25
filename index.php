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
// Getting the information
$ipaddress = $_SERVER['REMOTE_ADDR'];
$page = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$referrer = $_SERVER['HTTP_REFERER'];
$datetime = mktime();
$useragent = $_SERVER['HTTP_USER_AGENT'];
$remotehost = @getHostByAddr($ipaddress); 
if ($referrer == "https://8c5640c4-593a-47a7-b6c5-8e0bbce29093.id.repl.co/__replco/devtools_wrapper.html") {echo "<script>window.location.replace('home.php')</script"; }
if ($referrer == '') { $referrer = 'Manually entered URL 	🤣'; }
// Create log line
$logline = $ipaddress . '|' . $referrer . '|' . $datetime . '|' . $useragent
. '|' . $remotehost . '|' . $page . "\n";
// Write to log file:
$logfile = './db/visits.txt';
// Open the log file in "Append" mode
if (!$handle = fopen($logfile, 'a+')) {
 die("Failed to open log file");
}
sleep(3);
// Write $logline to our logfile.
if (fwrite($handle, $logline) === FALSE) {
 die("Failed to write to log file");
}

fclose($handle);
?>