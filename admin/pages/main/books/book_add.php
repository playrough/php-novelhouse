<?php
$sql = "SELECT * FROM genres";
$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

$genres = [];
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $genres[] = $row;
}

$sql = "SELECT MAX(book_id) AS max_id FROM books";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $max_id = $row["max_id"];
}
?>
<div class="row">
    <div class="col col-6">
        <h3 class="title">Thêm Tiểu Thuyết</h3>
        <form action="index.php?path=pages/main/books/book_add_process" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="form-message">
                    <?php echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label for="book_id">ID Truyện:</label>
                <input type="hidden" name="book_id" class="form-control" value="<?= $max_id + 1 ?>" />
                <input type="text" name="book_id" class="form-control disabled" value="<?= $max_id + 1 ?>" disabled />
            </div>
            <div class="form-group">
                <label for="book_key">Mã Truyện:</label>
                <input type="text" name="book_key" class="form-control" value="<?php echo isset($_SESSION['book_key_old']) ? $_SESSION['book_key_old'] : '' ?>" />
            </div>
            <div class="form-group">
                <label for="genre_id">Thể Loại:</label>
                <select type="text" name="genre_id" class="form-control">
                    <option value="">--- chọn ---</option>
                    <?php foreach ($genres as $genre) : ?>
                        <option value="<?= $genre['genre_id'] ?>" <?php echo isset($_SESSION['genre_id_old']) && $_SESSION['genre_id_old'] == $genre['genre_id'] ? 'selected' : '' ?>>
                            <?= $genre['genre_name'] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Tên Truyện:</label>
                <input type="text" name="title" class="form-control" value="<?php echo isset($_SESSION['title_old']) ? $_SESSION['title_old'] : '' ?>" />
            </div>
            <div class="form-group">
                <label for="author">Tác Giả:</label>
                <input type="text" name="author" class="form-control" value="<?php echo isset($_SESSION['author_old']) ? $_SESSION['author_old'] : '' ?>" />
            </div>
            <div class="form-group">
                <label for="summary">Tóm Tắt:</label>
                <textarea name="summary" class="form-control" rows="7"><?php echo isset($_SESSION['summary_old']) ? trim($_SESSION['summary_old']) : '' ?></textarea>
            </div>
            <div class="form-group">
                <label for="chapters">Số Chương:</label>
                <input type="number" name="chapters" class="form-control" value="0" />
            </div>
            <div class="form-group">
                <label for="views">Lượt Xem:</label>
                <input type="number" name="views" class="form-control" value="0" />
            </div>
            <div class="form-group">
                <label for="likes">Lượt Thích:</label>
                <input type="number" name="likes" class="form-control" value="0" />
            </div>
            <div class="form-group">
                <label for="cover_image" class="input_file">Ảnh Bìa:</label>
                <input type="file" id="cover_image" name="cover_image" accept="image/*" />
            </div>
            <button type="submit" class="btn btn-add" style="text-align: center">Thêm</button>
        </form>
    </div>
    <div class="col col-6">
        <div id="thumbnail-container" style="width: 400px;"></div>
    </div>
</div>
<script src="./assets/js/thumbnail.js"></script>

<?php
unset($_SESSION['auth_message']);
unset($_SESSION['book_key_old']);
unset($_SESSION['genre_id_old']);
unset($_SESSION['title_old']);
unset($_SESSION['author_old']);
unset($_SESSION['summary_old']);
