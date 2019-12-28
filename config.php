<?php 

	define("HOST","localhost");
	define("USER","root");
	define("PASS","");
	define("DATABASE","logindemo");

	function connect() {
		$conn = new mysqli(HOST,USER,PASS,DATABASE);
		$conn->set_charset('utf8');
		if(mysqli_connect_error($conn)) {
			echo $conn->connect_error;
		}
		return $conn;
	}

	function executeSql($sql) {
		$conn = new mysqli(HOST,USER,PASS,DATABASE);
		$conn->set_charset('utf8');
		if(mysqli_connect_error($conn)) {
			echo $conn->connect_error;
		}
		$conn->query($sql);
		$conn->close();
	}

	function fetchRow($sql) {
		$conn = new mysqli(HOST,USER,PASS,DATABASE);
		$conn->set_charset('utf8');
		if(mysqli_connect_error($conn)) {
			echo $conn->connect_error;
		}
		
		$result = $conn->query($sql);
		if(mysqli_num_rows($result) > 0) {
			$data = mysqli_fetch_assoc($result);
		}
		
		$conn->close();
		return $data;
	}

	function createTable() {
		$conn = connect();
		$sql = 'CREATE TABLE IF NOT EXISTS `users` (
				`id`  int UNSIGNED NOT NULL AUTO_INCREMENT ,
				`username`  varchar(255) NULL ,
				`password`  varchar(255) NULL ,
				`created_at`  timestamp NULL ON UPDATE CURRENT_TIMESTAMP ,
				PRIMARY KEY (`id`)
				)';
		$conn->query($sql);
		if($conn->query($sql)) {
			echo 'done';
		} else {
			echo 'sdfds';
		}
		$conn->close();
	}
 ?>