<?php include_once 'includes/format_number.php'; ?>

<div class="review">
    <div class="section-padding">
        <div class="container">
            <div class="path">
                <a class="path-link" href="index.php?path=pages/main/home"> Trang Chủ </a>
                <span> / </span>
                <a class="path-link" href="index.php?path=pages/main/filter&genre_id=<?= $book['genre_id'] ?>" title=""> <?= $book['genre_name'] ?></a>
                <span> / </span>
                <span> <?= $book['title'] ?> </span>
            </div>
            <div class="book-review">
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
                            <a href="index.php?path=pages/main/search&search_key=<?= $book['author'] ?>">
                                <span class="author"><?= $book['author'] ?></span>
                            </a>
                        </div>
                        <div class="book-summary">
                            <p id="book-summary-ells" class="_6">
                                <?= $book['summary'] ?>
                            </p>
                            <a id="moreBtn" class="moreBtn">Xem thêm</a>
                        </div>
                        <div class="action">
                            <?php if (isset($_SESSION['message'])) { ?>
                                <div style="margin-bottom: 5px;"><?= $_SESSION['message'] ?></div>
                            <?php } ?>
                            <button id="likeBtn" class="btn btn-action">Thích</button>
                            <script>
                                document.getElementById("likeBtn").addEventListener("click", function() {
                                    window.location.href = "index.php?path=pages/process/like_action&book_id=<?= $book['book_id'] ?>";
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/more-btn.js"></script>

<?php unset($_SESSION['message']);
