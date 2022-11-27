<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
?>
<div class="row">
  <div class="side">
    <h2>About our login</h2>
    <h5>What its for:</h5>
		<p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->aboutlogin);
		} ?></p>
    <h3> Disclaimer: </h3>
    <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->disclaimer);
		} ?></p>
<link rel="stylesheet" href="/assets/LoginRegister.css">
    <a href="/register.php"><button class="extrabuttons button">Register an Account</button></a>
	<a href="/extras/socials.php"><button class="extrabuttons button">Use Our Social Login Button [WIP]</button></a>
  </div>
  <div class="main">
    <!--<h3>TITLE HEADING</h3>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>-->
<h2>Login</h2>
		<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<label>Username</label>
		<input type="text" name="username" required>

		<label>Email</label>
		<input type="email" name="email" required>

		<label>Password</label>
		<input type="text" name="password" required>

		<button class="button extrabuttons" type="submit" name="submit">Log in</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

		
  </div>
</div>
<?php require_once($path.'/system/foot.php');  ?>

