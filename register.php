<?php 
	include_once 'config.php';

	if(isset($_POST['submit_register'])) {
		if(isset($_POST['username']) && isset($_POST['password'])) {
			if($_POST['username'] == '' || $_POST['username'] == null) {
				$error[] = 'user name bi trong';
			} 
			if($_POST['password'] == '' || $_POST['password'] == null) {
				$error[] = 'password bi trong';
			}
			if($_POST['password'] !== $_POST['repassword']) {
				$error[] = 'mat khau khong khop';
			}
			if(empty($error)) {
				$user = $_POST['username'];
				$password = $_POST['password'];
				$sql = "insert into users(username,password) values ('$user',md5('$password'))";
				executeSql($sql);
				echo 'dang ki thanh cong moi ban dang nhap <a href="login.php">tai day</a>';
			} else {
				foreach($error as $err) {
					echo $err;
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
		<form class="form-signin" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<h1>Tạo tài khoản</h1>
			<div class="form-group">
				<label for="user_name">Tên tài khoản:</label>
				<input type="text" name="username" id="user_name" placeholder="nhập tên tài khoản tại đây" class="form-control"  autofucus>
			</div>
			<div class="form-group">
				<label for="password">Mật khẩu:</label>
				<input type="password" name="password" id="password" placeholder="nhập mật khẩu tại đây" class="form-control"  autofucus>
			</div>
			<div class="form-group">
				<label for="repassword">Nhập lại mật khẩu:</label>
				<input type="password" name="repassword" id="repassword" placeholder="nhập mật khẩu tại đây" class="form-control"  autofucus>
			</div>
			<button type="submit" name="submit_register" class="btn btn-success">Tạo tài khoản</button>
		</form>
	</div>
</body>
</html>