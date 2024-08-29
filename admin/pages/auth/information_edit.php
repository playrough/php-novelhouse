<?php
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE user_id = $user_id";
$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

$user = $result->fetch_array(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col col-6">
        <h3 class="title">Thông Tin Tài Khoản</h3>
        <form action="index.php?path=pages/auth/information_edit_process" method="post">
            <div class="form-group">
                <div class="form-message">
                    <?php echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_id">ID Tài Khoản:</label>
                <input type="hidden" name="user_id" class="form-control" value="<?= $user_id ?>" />
                <input type="text" name="user_id" class="form-control disabled" value="<?= $user_id ?>" disabled />
            </div>
            <div class="form-group">
                <label for="full_name">Họ Tên:</label>
                <input type="text" name="full_name" class="form-control" value="<?= $user['full_name'] ?>" />
            </div>
            <div class="form-group">
                <label for="username">Tên Đăng Nhập:</label>
                <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" />
            </div>

            <div class="form-group">
                <label for="role">Quyền:</label>
                <select name="role" class="form-control">
                    <?php $array = [0, 1]; foreach ($array as $item) { ?>
                        <option value="<?= $item ?>" <?= $item == $user['role'] ? 'selected' : '' ?>><?= $item == 0 ? 'Thành Viên' : 'Quản Trị' ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="active">Trạng Thái:</label>
                <select name="active" class="form-control">
                    <?php $array = [0, 1]; foreach ($array as $item) { ?>
                        <option value="<?= $item ?>" <?= $item == $user['active'] ? 'selected' : '' ?>><?= $item == 0 ? 'Khóa' : 'Mở Khóa' ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-submit">Cập Nhật</button>
        </form>
    </div>
</div>
<?php unset($_SESSION['auth_message']);
