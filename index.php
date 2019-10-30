<!DOCTYPE html>
<html>
<head>
	<title>Teddy 해인 Do</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="https://kit.fontawesome.com/129e7cf8b7.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="header-container">
			<header class="page-header">
				<div class="header-left"></div>
				<div class="header-right"></div>
			</header>
		</div>
		<div class="form-container">
			<form action="index.php" method="POST">
				<div class="form-group">
					<label>User ID: </label>
					<br>
					<input type="text" name="user" class="form-control">
				</div>
				<div class="form-group">
					<label>Password: </label>
					<br>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" name="submit" class="submit-btn">
			</form>
		</div>
		
	</div>
	<?php
		if (isset($_SESSION['errors'])) {
			foreach ($_SESSION['errors'] as $error) {
				echo $error;
			}
		}
	?>
	<?php
		if (isset($_POST['user']) && isset($_POST['password'])) {
			$userId = $_POST['user'];
			$password = $_POST['password'];
			$_SESSION['errors'] = [];

			if ($userId != "teddydo") {
				array_push($_SESSION['errors'], "Wrong User ID!");	
			} elseif ($password != "DoctorMike") {
				array_push($_SESSION['errors'], "Wrong Password!");
			} elseif ($userId == "teddydo" && $password == "DoctorMike") {
				$_SESSION['user'] = $userId;
				$_SESSION['password'] = $password;
				header("Location: mainpage.php");
				exit;
			}
		}
	?>
</body>
</html>