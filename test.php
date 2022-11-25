<?php
session_start();
					$_SESSION['user'] = "test";
					$_SESSION['mail'] = "test@gmail.com";
					$_SESSION['password'] = "test";
					setcookie("verified", "true", time() + (86400), "/");
					header("location: account.php"); exit();
?>