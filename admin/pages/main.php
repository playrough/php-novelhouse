<div class="main">
    <header class="header">
        <nav class="header-nav">
            <div class="header-sidebar-btn">
                <?php if (isset($_SESSION['sidebar_status']) && $_SESSION['sidebar_status'] === 'closed') : ?>
                    <img class="sidebar-icon" src="assets/icons/align-left.svg" alt="">
                <?php elseif (isset($_SESSION['sidebar_status']) && $_SESSION['sidebar_status'] === '') : ?>
                    <img class="sidebar-icon" src="assets/icons/align-right.svg" alt="">
                <?php else : ?>
                    <img class="sidebar-icon" src="assets/icons/align-right.svg" alt="">
                <?php endif ?>
            </div>
            <div class="header-user">
                <a class="user-name" href="">Xin chào <span class="auth-username"><?= $_SESSION['full_name'] ?></span></a>
            </div>
        </nav>
    </header>
    <div class="content">

        <?php
        $path = isset($_GET['path']) ? $_GET['path'] : "pages/main/home";
        include $path . ".php";
        ?>

    </div>
</div>
<script src="assets/js/sidebar.js"></script>