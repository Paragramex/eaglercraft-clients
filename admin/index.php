<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
if(!isset($_SESSION['user'])){
	$_SESSION['pagetitle'] = "Home";
		echo "<script>window.location.replace('home.php')</script>";
		exit();
	}
	?>

  <div class="main" style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);">
	
<div class="content">
		<header>
			<h2>Admin Panel<h2>
			<a href="?logout">Log out</a>
			</header>
		<main>
			<h3>Links</h3>
			<p>Logs: <a href="/admin/logs.php">>admin>logs.php</a></p>
			<p>Control Panel: <a href="/admin/panel.php">>admin>panel.php</a></p>
			</p>
		</main>
				<hr class="rounded">
				<h3>User list:</h3>
				<table>
					
<?php

//Read the content of a JSON file

$users = file_get_contents($path.'/db/users.json');

//Decode the JSON data into an array

$decoded_data = json_decode($users, true);

echo "<tr>
    <th>User</th>
    <th>Email</th>
    <th>Actions</th>
  </tr>";

//Print the JSON data

foreach($decoded_data as $user) {

$username = $user['username'];

$email = $user['email'];

echo " <tr>
    <td>$username</td>
    <td>$email</td>
  </tr>";

}

?>
</table>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>

