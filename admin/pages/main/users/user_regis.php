<div class="row">
    <div class="col col-6">
        <h3 class="title">Đăng Ký</h3>
        <form method="post" action="index.php?path=pages/main/users/user_regis_process">
            <div class="form-group">
                <div class="form-message">
                    <?php echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label for="full_name">Họ và tên:</label>
                <input type="text" name="full_name" class="form-control" value="<?php echo isset($_SESSION['full_name_old']) ? $_SESSION['full_name_old'] : '' ?>" />
            </div>
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" name="username" class="form-control" value="<?php echo isset($_SESSION['username_old']) ? $_SESSION['username_old'] : '' ?>" />
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" name="password" class="form-control" value="<?php echo isset($_SESSION['password_old']) ? $_SESSION['password_old'] : '' ?>" />
            </div>
            <div class="form-group">
                <label for="confirmPassword">Xác nhận mật khẩu:</label>
                <input type="password" name="confirmPassword" class="form-control" />
            </div>
            <button type="submit" class="btn btn-submit">Đăng Ký</button>
        </form>
    </div>
</div>

<?php
unset($_SESSION['auth_message']);
unset($_SESSION['full_name_old']);
unset($_SESSION['username_old']);
unset($_SESSION['password_old']);
