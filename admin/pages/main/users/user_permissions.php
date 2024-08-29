<?php
if (isset($_GET['role'])) {

	$role = $_GET['role'];
	$user_id = $_GET['user_id'];

	$sql =  "UPDATE users SET role = $role WHERE user_id = $user_id";
	$result = $connect->query($sql);

	if (!$result) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

	header("Location: index.php?path=pages/main/users/user_list");
	exit();
}

if (isset($_GET['active'])) {

	$active = $_GET['active'];
	$user_id = $_GET['user_id'];

	$sql =  "UPDATE users SET active = $active WHERE user_id = $user_id";
	$result = $connect->query($sql);

	if (!$result) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

	header("Location: index.php?path=pages/main/users/user_list");
	exit();
}
