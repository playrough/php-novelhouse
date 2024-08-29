<div class="book-item">
    <a class="book-item-link" href="index.php?path=pages/main/review&book_id=<?= $book['book_id'] ?>">
        <img class="book-item-cover" src="<?= $book['cover_image'] ?>" alt="<?= $book['title'] ?>" />
    </a>
    <h4 class="book-item-title ells _2">
        <a href="index.php?path=pages/main/review&book_id=<?= $book['book_id'] ?>" title="<?= $book['title'] ?>"><?= $book['title'] ?></a>
    </h4>
    <p class="book-item-genre ell">
        <a href="index.php?path=pages/main/filter&genre_id=<?= $book['genre_id'] ?>"><?= $book['genre_name'] ?></a>
    </p>
</div>