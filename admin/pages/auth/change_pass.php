<div class="row">
    <div class="col col-6">
        <h3 class="title">Đổi Mật Khẩu</h3>
        <form action="index.php?path=pages/auth/change_pass_process" method="post">
            <div class="form-group">
                <div class="form-message">
                    <?php echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Mật Khẩu:</label>
                <input type="password" name="password" class="form-control" value="<?php echo isset($_SESSION['password_old']) ? $_SESSION['password_old'] : '' ?>" />
            </div>
            <div class="form-group">
                <label for="password_new">Mật Khẩu Mới:</label>
                <input type="password" name="password_new" class="form-control" />
            </div>
            <div class="form-group">
                <label for="confirmPassword">Xác Nhận Mật Khẩu:</label>
                <input type="password" name="confirmPassword" class="form-control" />
            </div>
            <button type="submit" class="btn btn-submit">Xác Nhận</button>
        </form>
    </div>
</div>

<?php
unset($_SESSION['auth_message']);
unset($_SESSION['password_old']);
