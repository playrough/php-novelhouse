<?php
$full_name = $_POST['full_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if (trim($full_name) == "") {
    $_SESSION['auth_message'] = 'Họ và tên không được bỏ trống !';
} elseif (trim($username) == "") {
    $_SESSION['auth_message'] = 'Tên đăng nhập không được bỏ trống !';
} elseif (trim($password) == "") {
    $_SESSION['auth_message'] = 'Mật khẩu không được bỏ trống !';
} elseif ($password != $confirmPassword) {
    $_SESSION['auth_message'] = 'Xác nhận mật khẩu không đúng !';
} else {

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $connect->query($sql);

    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }

    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row) {
        $_SESSION['auth_message'] = 'Tên đăng nhập đã được sử dụng !';
    } else {

        $password = md5($password);

        $sql = "INSERT INTO users (full_name, username, password, role, active)
					VALUES ('$full_name', '$username', '$password', 1, 1)";

        $result = $connect->query($sql);

        if ($result) {
            header("Location: index.php?path=pages/main/users/user_list");
            exit();
        }

    }
    
}

$_SESSION['full_name_old'] = $full_name;
$_SESSION['username_old'] = $username;
$_SESSION['password_old'] = $password;
header("Location: index.php?path=pages/main/users/user_regis");
