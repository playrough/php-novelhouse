<div class="sidebar <?php echo isset($_SESSION['sidebar_status']) ? $_SESSION['sidebar_status'] : '' ?>">
    <div class="logo">
        <a class="logo-link" href="index.php?path=pages/main/home">NOVELHOUSE</a>
    </div>
    <div class="sidebar-menu">
        <div class="top-menu">
            <ul class="menu-list">
                <li class="sidebar-menu-item title">QUẢN LÝ</li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link" href="index.php?path=pages/main/books/book_add">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#efeee5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                        <span class="link-title">Thêm Tiểu Thuyết</span>
                    </a>
                </li>
                <?php if ($_SESSION['role'] === '1') : ?>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-link" href="index.php?path=pages/main/books/book_list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#efeee5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                            <span class="link-title">Tiểu Thuyết</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-link" href="index.php?path=pages/main/genres/genre_list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#efeee5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                            <span class="link-title">Thể Loại</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-link" href="index.php?path=pages/main/users/user_list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#efeee5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span class="link-title">Thành Viên</span>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
            <ul class="menu-list">
                <li class="sidebar-menu-item title">TÀI KHOẢN</li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link" href="index.php?path=pages/auth/information_edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#efeee5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                        <span class="link-title">Thông Tin Cá Nhân</span>
                    </a>
                </li>
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-link" href="index.php?path=pages/auth/change_pass">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#efeee5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <span class="link-title">Đổi Mật Khẩu</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-menu">
            <div class="logout">
                <div class="logout-item">
                    <a class="logout-item-link" href="index.php?path=pages/auth/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#efeee5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="link-title">Đăng Xuất</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>