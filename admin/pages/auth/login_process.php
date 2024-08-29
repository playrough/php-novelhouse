<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (trim($username) == "") {
    $_SESSION['auth_message'] = 'Tên đăng nhập không được bỏ trống !';
} elseif (trim($password) == "") {
    $_SESSION['auth_message'] = 'Mật khẩu không được bỏ trống !';
} else {

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $connect->query($sql);

    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }

    $row = $result->fetch_array(MYSQLI_ASSOC);

    if (!$row) {
        $_SESSION['auth_message'] = 'Tên đăng nhập không tồn tại !';
    } else {

        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $connect->query($sql);

        if (!$result) {
            die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
            exit();
        }

        $row = $result->fetch_array(MYSQLI_ASSOC);

        if (!$row) {
            $_SESSION['auth_message'] = 'Mật khẩu không chính xác !';
        } else {

            if ($row['active'] == 0) {
                $_SESSION['auth_message'] = 'Người dùng đã bị khóa tài khoản !';
            } else {

                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['role'] = $row['role'];
                header("Location: index.php");
                exit();

            }

        }

    }

}

$_SESSION['username_old'] = $username;
header("Location: index.php?auth=pages/auth/login");
