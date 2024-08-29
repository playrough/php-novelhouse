<div class="carousel-desc-item <?= ($index == 0 ? "on" : "") ?>">
    <h4 class="carousel-desc-title ell">
        <a class="carousel-desc-title-link" href="index.php?path=pages/main/review&book_id=<?= $book['book_id'] ?>" title="<?= $book['title'] ?>">
            <?= $book['title'] ?>
        </a>
    </h4>
    <p class="carousel-desc-info ell">
        <a class="carousel-desc-genre" href="index.php?path=pages/main/filter&genre_id=<?= $book['genre_id'] ?>">
            <?= $book['genre_name'] ?>
        </a>
        ·
        <a class="carousel-desc-author" href="index.php?path=pages/main/search&search_key=<?= $book['author'] ?>">
            <?= $book['author'] ?>
        </a>
    </p>
    <p class="carousel-desc-summary ells _8">
        <?= $book['summary'] ?>
    </p>
</div>