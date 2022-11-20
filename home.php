<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
$_SESSION['pagetitle'] = "Home";
?>


<div class="row">
  <div class="side">
    <h2>About the site</h2>
    <h5>What its for:</h5>
		<p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->aboutsite);
		} ?></p>
		<h5>What is EaglerCraft?</h5>
    <p> Eaglercraft is a 1.5.2 minecraft javascript runtime made by LAX1DUDE</p>
    <h3> Disclaimer: </h3>
    <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->disclaimer);
		} ?></p>
    <div class="fakeimg" onclick="location.href = 'https://minekhan.thingmaker.repl.co/';" style="height:60px;">MineKhan 1.0.5 (a clone of minecraft thats also fun)</div><br>
    <div class="fakeimg" onclick="location.href = '/account.php';" style="height:60px;">View Our Collection</div><br>
    <div class="fakeimg" onclick="location.href = '/';" style="height:60px;">Submit a Client Here! [Coming Soon]</div>
  </div>
  <div class="main">
    <!--<h3>TITLE HEADING</h3>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>-->
<h2>The Blog and Site News: </h2>
<hr>
    <h3>The site begins creation</h3>
    <h5>The site begins construction, Nov 13, 2022</h5>
    <div class="fakeimg" style="height:270px;"><img src="data:image/png;base64,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" />
</div>
    <p>This website idea is thought up by <a href="https://github.com/Paragramex">Paragram</a>.</p>
    <p>One day <a href="https://github.com/Paragramex">Paragram</a> was playing with an eaglercraft hacked client and his brother wanted to try it. <a href="https://github.com/Paragramex">Paragram</a> decided that maybe he should share all of his clients with the world, these clients include: Kerosene, NitClient, Fuchsiax. He started to create this exact site.</p>
  </div>
</div>

<?php require_once($path.'/system/foot.php');  ?>

