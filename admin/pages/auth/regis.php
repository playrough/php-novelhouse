<div class="authentication">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-6">
                    <div class="regis-form">
                        <h3 class="title">Đăng Ký</h3>
                        <form class="auth-form" action="index.php?auth=pages/auth/regis_process" method="post">
                            <div class="form-group">
                                <input type="text" name="full_name" class="form-control" placeholder="Họ và tên" value="<?php echo isset($_SESSION['full_name_old']) ? $_SESSION['full_name_old'] : '' ?>" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" value="<?php echo isset($_SESSION['username_old']) ? $_SESSION['username_old'] : '' ?>" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" value="<?php echo isset($_SESSION['password_old']) ? $_SESSION['password_old'] : '' ?>" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirmPassword" class="form-control" placeholder="Xác nhận mật khẩu" />
                            </div>
                            <div class="form-group">
                                <div class="form-message">
                                    <?php echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : '' ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-submit">Đăng Ký</button>
                            <a class="option-link" href="index.php?auth=pages/auth/login">Bạn đã có tài khoản ?</a>
                        </form>
                    </div>
                </div>
                <div class="col col-6">
                    <img class="picture" src="./assets/images/banner/regis.jpg" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php
unset($_SESSION['auth_message']);
unset($_SESSION['full_name_old']);
unset($_SESSION['username_old']);
unset($_SESSION['password_old']);
