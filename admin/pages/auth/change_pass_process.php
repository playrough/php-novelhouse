<?php
$user_id = $_SESSION['user_id'];
$sql = "SELECT password FROM users WHERE user_id = $user_id";
$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

$user = $result->fetch_array(MYSQLI_ASSOC);

$password = $_POST['password'];
$password_new = $_POST['password_new'];
$confirmPassword = $_POST['confirmPassword'];

if (trim($password) == "") {
    $_SESSION['auth_message'] = 'Mật khẩu không được bỏ trống !';
} elseif (trim($password_new) == "") {
    $_SESSION['auth_message'] = 'Mật khẩu mới không được bỏ trống !';
} elseif ($password_new != $confirmPassword) {
    $_SESSION['auth_message'] = 'Xác nhận mật khẩu không đúng !';
} else {

    $password_md5 = md5($password);

    if ($password_md5 !== $user['password']) {
        $_SESSION['auth_message'] = "Mật khẩu không chính xác !";
    } else {

        $password_new = md5($password_new);
        $sql = "UPDATE users SET password = '$password_new' WHERE  user_id = $user_id";
        $result = $connect->query($sql);

        if (!$result) {
            $_SESSION['auth_message'] = "Lỗi khi thực hiện truy vấn: " . $connect->error;
        }

        $_SESSION['auth_message'] = "Đổi mật khẩu thành công !";
        
    }

}

$_SESSION['password_old'] = $password;
header('Location: index.php?path=pages/auth/change_pass');
