<?php
$sql = "SELECT * FROM genres";
$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$genres = [];
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $genres[] = $row;
}

$book_id = isset($_GET['book_id']) ? $_GET['book_id'] : $_SESSION['book_id_edit'];
$_SESSION['book_id_edit'] = $book_id;

$sql = "SELECT * FROM books
        INNER JOIN genres ON books.genre_id = genres.genre_id
        WHERE books.book_id = $book_id";

$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$book = $result->fetch_array(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col col-6">
        <h3 class="title">Cập Nhật Truyện</h3>
        <form action="index.php?path=pages/main/books/book_edit_process" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="form-message">
                    <?php echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label for="book_id">ID Truyện:</label>
                <input type="hidden" name="book_id" class="form-control" value="<?= $book['book_id'] ?>" />
                <input type="text" name="book_id" class="form-control disabled" value="<?= $book['book_id'] ?>" disabled />
            </div>
            <div class="form-group">
                <label for="book_key">Mã Truyện:</label>
                <input type="text" name="book_key" class="form-control" value="<?= $book['book_key'] ?>" />
            </div>
            <div class="form-group">
                <label for="genre_id">Thể Loại:</label>
                <select type="text" name="genre_id" class="form-control" value="<?= $book['genre_id'] ?>">
                    <option value="">-- Chọn --</option>
                    <?php foreach ($genres as $genre) : ?>
                        <option value="<?= $genre['genre_id'] ?>" <?php if ($genre['genre_id'] == $book['genre_id']) echo 'selected' ?>>
                            <?= $genre['genre_name'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Tên Truyện:</label>
                <input type="text" name="title" class="form-control" value="<?= $book['title'] ?>" />
            </div>
            <div class="form-group">
                <label for="author">Tác Giả:</label>
                <input type="text" name="author" class="form-control" value="<?= $book['author'] ?>" />
            </div>
            <div class="form-group">
                <label for="summary">Tóm Tắt:</label>
                <textarea name="summary" class="form-control" rows="4"><?= $book['summary'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="chapters">Số Chương:</label>
                <input type="number" name="chapters" class="form-control" value="<?= $book['chapters'] ?>" />
            </div>
            <div class="form-group">
                <label for="views">Lượt Xem:</label>
                <input type="number" name="views" class="form-control" value="<?= $book['views'] ?>" />
            </div>
            <div class="form-group">
                <label for="likes">Lượt Thích:</label>
                <input type="number" name="likes" class="form-control" value="<?= $book['likes'] ?>" />
            </div>
            <div class="form-group">
                <label for="cover_image" class="input_file">Ảnh Bìa:</label>
                <input type="file" id="cover_image" name="cover_image" accept="image/*" />
                <input type="hidden" name="cover_image_old" value="<?= $book['cover_image'] ?>" />
            </div>
            <button type="submit" class="btn btn-add" style="text-align: center">Cập Nhật</button>
        </form>
    </div>
    <div class="col col-6">
        <div id="thumbnail-container" style="width: 400px;">
            <img class="thumbnail" src="<?= $book['cover_image'] ?>" alt="">
        </div>
    </div>
</div>

<script src="./assets/js/thumbnail.js"></script>
<?php unset($_SESSION['auth_message']);
