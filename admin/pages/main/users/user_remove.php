<?php
$user_id = $_GET['user_id'];
$sql = "DELETE FROM users WHERE user_id = $user_id";
$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
} else {
    header("Location: index.php?path=pages/main/users/user_list");
}
