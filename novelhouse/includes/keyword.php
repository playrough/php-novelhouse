<div class="keywords">
    <div class="section-padding">
        <div class="container">
            <h3 class="section-heading">Từ Khóa & Thể Loại</h3>
            <ul class="keyword-list">

                <?php foreach ($rows as $row) : ?>
                    <?php if (isset($row['author'])) : ?>
                        <li class="keyword btn">
                            <a href="index.php?path=pages/main/search&search_key=<?= $row['author'] ?>">
                                <?= $row['author'] ?>
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="keyword btn">
                            <a href="index.php?path=pages/main/filter&genre_id=<?= $row['genre_id'] ?>">
                                <?= $row['genre_name'] ?>
                            </a>
                        </li>
                    <?php endif ?>
                <?php endforeach ?>

            </ul>
        </div>
    </div>
</div>