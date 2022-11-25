<?php session_start(); 
if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		unset($_SESSION['password']);
		unset($_SESSION['mail']);
		setcookie("verified", "true", time() - 99999999);
		echo "<script>window.location.replace('/home.php')</script>"; exit();
	}
$path = $_SERVER['DOCUMENT_ROOT'];
if (isset($_SESSION['user'])){
	setcookie("verified", "true", time() + (86400), "/");
		}

require(dirname(__FILE__) . '/scripts.php');
?>
<head>
<title><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($name->sitetitle);
		} ?></title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="<?php if (file_exists($path.'/db/site.json')) {
			$image = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($image->favicon);
		} ?>">
<link id="theme" rel="stylesheet" type="text/css" href="/assets/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="header">
  <h1><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($name->headtitle);
		} ?></h1>
  <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($name->headfooter);
		} ?></p>
</div>
<div class="navbar">
  <a href="/home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
  <a href="/servers.php"><i class="fa fa-server" aria-hidden="true"></i> Servers</a>
  <a href="/relays.php"><i class="fa fa-rss" aria-hidden="true"></i> Relays</a>
	<!--<a href="/test.php">test account</a>
	<button onclick="()">Switch</button>-->

<?php if( isset($_SESSION['user']) && !empty($_SESSION['user']) )
{
?>
			<a href="?logout" class="right"><i class="fa fa-sign-out" aria-hidden="true"></i>
 Logout</a>
			<a href="/account.php" class="right" ><i class="fa fa-user" aria-hidden="true"></i> 
<?php echo $_SESSION["user"] ?></a>
<?php }else{ ?>
     <a href="/login.php" class="right"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
     <a href="/register.php" class="right" ><i class="fa fa-user-plus" aria-hidden="true"></i> 
Register</a>
<?php } ?>
</div>
<!-- Alerts under this line -->

<!-- <div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>

<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong> Indicates a successful or positive action.
</div> -->
<div class="phonealert">
	<div class="alert warm">
  <span class="closebtn">&times;</span>  
  <strong>WARNING:</strong> This site has minimal phone support and eaglercraft cant be played on phones :/.
</div>
</div>
<!-- <div class="alert warning">
  <span class="closebtn">&times;</span>  
  <strong>Warning!</strong> Indicates a warning that might need attention.
</div>

<!-- Alerts above this line -->
<?php
require(dirname(__FILE__) . '/scripts.php');
?>