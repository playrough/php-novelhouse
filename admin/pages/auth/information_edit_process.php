<?php
$user_id = $_POST['user_id'];
$full_name = $_POST['full_name'];
$username = $_POST['username'];
$role = $_POST['role'];
$active = $_POST['active'];

if (trim($full_name) == "") {
    $_SESSION['auth_message'] = 'Họ và tên không được bỏ trống !';
} elseif (trim($username) == "") {
    $_SESSION['auth_message'] = 'Tên đăng nhập không được bỏ trống !';
} else {

    $sql = "SELECT username FROM users WHERE user_id = $user_id";
    $result = $connect->query($sql);

    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }

    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row && $row['username'] !== $username) {

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $connect->query($sql);

        if (!$result) {
            die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
            exit();
        }

        $row = $result->fetch_array(MYSQLI_ASSOC);

        if ($row) {
            $_SESSION['auth_message'] = 'Tên đăng nhập đã tồn tại !';
            header('Location: index.php?path=pages/auth/information_edit');
            exit();
        }

    }

    $sql = "UPDATE  users
            SET     full_name = '$full_name',
                    username = '$username',
                    role = $role,
                    active = $active
            WHERE   user_id = $user_id";

    $result = $connect->query($sql);

    if (!$result) {
        $_SESSION['auth_message'] = "Lỗi khi thực hiện truy vấn: " . $connect->error;
    }

    $_SESSION['auth_message'] = 'Cập nhật thành công !';
    
}

header('Location: index.php?path=pages/auth/information_edit');
