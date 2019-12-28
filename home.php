<?php 
	include_once 'process.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Simple</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php if(isset($_SESSION['account'])) : ?>
		<div class="container">
		<h1>Home page</h1>
		<p>you are logged!</p>
		<div style="float:right">
		<a href="process.php?id=<?php echo $_SESSION['account']['id'] ?>">Log out</a>
		</div>
	</div>
	<?php else :?>
	<div class="container">
		<h1>Home page</h1>
		<div style="float:right">
		<a href="login.php">Login</a>
		<a href="register.php" style="margin-left:30px">Register</a>
		</div>
	</div>
	<?php endif; ?>
</body>
</html>