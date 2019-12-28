<?php 
	session_start();
	include_once 'config.php';
	$user = '';
	$password = '';
	$error = [];

	if(isset($_POST['submit_register'])) {
		if(isset($_POST['username']) && isset($_POST['password'])) {
			if($_POST['username'] == '' || $_POST['username'] == null) {
				$error[] = 'username';
				if($_POST['password'] == '' || $_POST['password'] == null) {
					$error[] = 'password';
				}
				print_r($error);
			} else {
				$user = $_POST['username'];
				$password = $_POST['password'];
				$sql = "insert into users(username,password) values ($user,md5('$password')";
				executeSql($sql);
				header('location: register.php');
				die;
			}	
		}
	}

	if(isset($_POST['submit_login'])) {
		if(isset($_POST['username']) && isset($_POST['password'])) {
			$user = $_POST['username'];
			$password = $_POST['password'];

			$sql = "select * from users";
			$account = fetchRow($sql);
			if($user == $account['username'] && $password == $account['password']) {
				$_SESSION['account'] = $account;
				header('location: home.php');
				die;
			}
		}
	}
	if(isset($_GET['id'])) {
		unset($_SESSION['account']);
		header('location: home.php');
		die;
	}
 ?>