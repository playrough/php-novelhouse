<?php
$sql = "SELECT * FROM genres";
$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$rows = [];
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $rows[] = $row;
}
?>

<header class="header">
    <div class="top-header">
        <div class="container">
            <nav class="top-header-nav">
                <div class="menu">
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a class="menu-item-link" href="index.php?path=pages/main/home">Trang chủ</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-item-link" href="#footer">Giới thiệu</a>
                        </li>
                    </ul>
                </div>
                <div class="search-box">
                    <form class="form-container" name="search-form" action="index.php?path=pages/main/search" method="post">
                        <input class="search-input input" type="text" name="search" placeholder="Tìm truyện..." />
                        <button class="search-btn btn" type="submit" name="submit">
                            <img src="assets/icons/search.svg" alt="Icon" />
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <nav class="bottom-header-nav">
                <div class="logo">
                    <a class="logo-link" href="index.php?path=pages/main/home">NovelHouse</a>
                </div>
                <ul class="genre-list">

                    <?php $firstSevenGenre = array_slice($rows, 0, 7);
                    foreach ($firstSevenGenre as $genre) : ?>
                        <li class="genre-item">
                            <a class="genre-item-link" href="index.php?path=pages/main/filter&genre_id=<?= $genre['genre_id'] ?>">
                                <?= $genre['genre_name'] ?>
                            </a>
                        </li>
                    <?php endforeach ?>

                </ul>
            </nav>
        </div>
    </div>
</header>