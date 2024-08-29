<?php
$user_id = $_POST['user_id'];
$full_name = $_POST['full_name'];
$role = $_POST['role'];
$active = $_POST['active'];

if (trim($full_name) == "") {
    $_SESSION['auth_message'] = 'Họ và tên không được bỏ trống !';
} elseif (trim($role) == "") {
    $_SESSION['auth_message'] = 'Quyền không được bỏ trống !';
} elseif (!($role == 0 || $role == 1)) {
    $_SESSION['auth_message'] = 'Quyền phải là 0 hoặc là 1 !';
} elseif (trim($active) == "") {
    $_SESSION['auth_message'] = 'Trạng thái không được bỏ trống !';
} elseif (!($active == 0 || $active == 1)) {
    $_SESSION['auth_message'] = 'Trạng thái phải là 0 hoặc là 1 !';
} else {

    $sql = "UPDATE  users
            SET     full_name = '$full_name',
                    role = $role,
                    active = $active
            WHERE   user_id = $user_id";

    $result = $connect->query($sql);
    
    if (!$result) {
        $_SESSION['auth_message'] = "Lỗi khi thực hiện truy vấn: " . $connect->error;
    } else {
        header('Location: index.php?path=pages/main/users/user_list');
        exit();
    }

}

header('Location: index.php?path=pages/main/users/user_edit');
