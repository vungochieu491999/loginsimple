<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		.form-signin {
		    width: 100%;
		    max-width: 330px;
		    padding: 15px;
		    margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<form class="form-signin" action="process.php" method="post">
			<h1>Đăng nhập</h1>
			<div class="form-group">
				<label for="user_name">Tên tài khoản:</label>
				<input type="text" name="username" id="user_name" placeholder="nhập tên tài khoản tại đây" class="form-control" required autofucus>
			</div>
			<div class="form-group">
				<label for="password">Tên tài khoản:</label>
				<input type="password" name="password" id="password" placeholder="nhập mật khẩu tại đây" class="form-control" required autofucus>
			</div>
			<button type="submit" name="submit_login" class="btn btn-success">Đăng nhập</button>
		</form>
	</div>
</body>
</html>