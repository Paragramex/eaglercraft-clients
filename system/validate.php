<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
$_SESSION['pagetitle'] = "Servers";
	?>
  <div class="main" style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);">
<div class="content">
		<header>
			<h2>Error<h2>
			</header>
		<main>
			<?php
if(!isset($_COOKIE['verified'])) {
  echo "Verification status is: [false]<br>";
	echo " Reload page or <a href='/login.php'>login</a> to view that page<br>";
} else {
  echo "Verification status is: [" . $_COOKIE['verified'] . "]<br>";
  echo "<a href="?><?php echo $_GET['client']; ?><?php echo ">continue</a> to the last page?";
} ?>
		</main>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>

