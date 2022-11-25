<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
if(!isset($_SESSION['user'])){
	$_SESSION['pagetitle'] = "Home";
		echo "<script>window.location.replace('home.php')</script>";
		exit();
	}?>

<style>

	form, .content {
	max-width: 800px;
	overflow-wrap: break-word;
	min-height: 500px;
	margin: 100px auto;
	border:  thin solid #e4e4e4;
	padding: 40px 30px;
	box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
	background-color: white;
}
</style>
  <div class="main" style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);">
	
<div class="content">
		<header>
			<h2>Admin Logs</h2>
			<a href="?logout">Log out</a>
			</header>
		<main>
			<?php
$path = $_SERVER['DOCUMENT_ROOT'];
// Open log file
$logfile = $path."/db/logs.txt";

if (file_exists($logfile)) {
    $handle = fopen($logfile, "r");
    $log = fread($handle, filesize($logfile));
    fclose($handle);
} else {
    die ("The log file doesn't exist!");
}
// Seperate each logline
$log = explode("\n", trim($log)); 
// Seperate each part in each logline
for ($i = 0; $i < count($log); $i++) {
    $log[$i] = trim($log[$i]);
    $log[$i] = explode('|', $log[$i]);
}
?>
<div class="visitcounter"><h3 style="color:#86A8E7;">Site Visits: <?php $content = file_get_contents($path.'/db/visitcount.txt');
echo $content; ?></h3></div>

<?php
echo '<table>';
echo '<th>Type</th>';
echo '<th>Info</th>';
echo '<th>Date</th>';

foreach ($log as $logline) {
    echo '<tr>';
    echo '<td>' . $logline['0'] . '</td>';
    echo '<td>' . $logline['1'] . '</td>';
    echo '<td>' . date("Y-m-d h:i:sa", $logline['2'])  . '</td>';

    echo '</tr>';

}

echo '</table>';

?>
		</main>

<table>
</table>
</div>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>
