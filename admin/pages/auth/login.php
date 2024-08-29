<div class="authentication">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-6">
                    <div class="login-form">
                        <h3 class="title">Đăng Nhập</h3>
                        <form class="auth-form" action="index.php?auth=pages/auth/login_process" method="post">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" value="<?php echo isset($_SESSION['username_old']) ? $_SESSION['username_old'] : '' ?>" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" />
                            </div>
                            <div class="form-group">
                                <div class="form-message">
                                    <?php echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : '' ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-submit">Đăng Nhập</button>
                            <a class="option-link" href="index.php?auth=pages/auth/regis">Bạn chưa có tài khoản ?</a>
                        </form>
                    </div>
                </div>
                <div class="col col-6">
                    <img class="picture" src="./assets/images/banner/login.jpg" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php
unset($_SESSION['auth_message']);
unset($_SESSION['username_old']);
