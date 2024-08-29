<?php
include_once 'scripts/format_number.php';

$book_id = $_GET['book_id'];

$sql = "SELECT * FROM books
        INNER JOIN genres ON books.genre_id = genres.genre_id
        WHERE books.book_id = $book_id";

$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$book = $result->fetch_array(MYSQLI_ASSOC);
?>
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-4">
                <img class="book-cover" src="<?= $book['cover_image'] ?>" alt="<?= $book['title'] ?>" />
            </div>
            <div class="col col-8">
                <h1 class="book-title"><?= $book['title'] ?></h1>
                <div class="book-detail">
                    <img class="detail-icon" src="assets/icons/layers.svg" alt="layer" />
                    <span><?= $book['genre_name'] ?></span>
                    <img class="detail-icon" src="assets/icons/file-text.svg" alt="file-text" />
                    <span><?= $book['chapters'] ?> Chương</span>
                    <img class="detail-icon" src="assets/icons/eye.svg" alt="eye" />
                    <span><?= format_number($book['views']) ?> Lượt xem</span>
                    <img class="detail-icon" src="assets/icons/heart.svg" alt="heart" />
                    <span><?= format_number($book['likes']) ?> Lượt thích</span>
                </div>
                <div class="book-author">
                    <span>Tác giả: </span>
                    <span class="author"><?= $book['author'] ?></strong>
                </div>
                <div class="book-summary">
                    <p id="book-summary-ells" class="_6">
                        <?= $book['summary'] ?>
                    </p>
                    <a id="moreBtn" class="moreBtn">Xem thêm</a>
                </div>
                <a class="btn" href="index.php?path=pages/main/books/book_edit">Chỉnh sửa</a>
                <a class="btn btn-remove" href="index.php?path=pages/main/books/book_remove&book_id=<?= $book_id ?>">Xóa tiểu thuyết</a>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/more-btn.js"></script>
<script src="assets/js/remove-confirm.js"></script>