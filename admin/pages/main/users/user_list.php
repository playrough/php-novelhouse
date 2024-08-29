<?php
$sql = "SELECT * FROM users";
$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$users = [];
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $users[] = $row;
}
?>
<h3 class="title">Danh Sách Thành Viên</h3>
<table>
    <tr>
        <th>Mã Thành Viên</th>
        <th>Họ Tên</th>
        <th>Tên Đăng Nhập</th>
        <th>Quyền</th>
        <th colspan="3">Thao Tác</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user['user_id'] ?></td>
            <td>
                <p><?= $user['full_name'] ?></p>
            </td>
            <td>
                <p><?= $user['username'] ?></p>
            </td>

            <?php if ($user['role'] === '1') { ?>
                <td>
                    <span>Quản Trị</span>
                    <a href="index.php?path=pages/main/users/user_permissions&user_id=<?= $user['user_id'] ?>&role=0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                </td>
            <?php } else { ?>
                <td>
                    <span>Thành Viên</span>
                    <a href="index.php?path=pages/main/users/user_permissions&user_id=<?= $user['user_id'] ?>&role=1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-chevron-up">
                            <polyline points="18 15 12 9 6 15"></polyline>
                        </svg>
                    </a>
                </td>
            <?php } ?>

            <?php if ($user['active'] === '1') { ?>
                <td>
                    <a href="index.php?path=pages/main/users/user_permissions&user_id=<?= $user['user_id'] ?>&active=0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-unlock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                        </svg>
                    </a>
                </td>
            <?php } else { ?>
                <td>
                    <a href="index.php?path=pages/main/users/user_permissions&user_id=<?= $user['user_id'] ?>&active=1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </a>
                </td>
            <?php } ?>

            <td>
                <a href="index.php?path=pages/main/users/user_edit&user_id=<?= $user['user_id'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-edit">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </a>
            </td>
            <td>
                <a class="btn-remove" href="index.php?path=pages/main/users/user_remove&user_id=<?= $user['user_id'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-trash">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    </svg>
                </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<a class="btn btn-link" href="index.php?path=pages/main/users/user_regis">Thêm thành viên</a>
<script src="assets/js/remove-confirm.js"></script>