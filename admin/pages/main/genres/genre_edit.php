<?php
$genre_id = isset($_GET['genre_id']) ? $_GET['genre_id'] : $_SESSION['genre_id_edit'];
$_SESSION['genre_id_edit'] = $genre_id;
?>
<div class="row">
    <div class="col col-6">
        <h3 class="title">Cập Nhật Thể Loại</h3>
        <form action="index.php?path=pages/main/genres/genre_edit_process" method="post">
            <div class="form-group">
                <div class="form-message">
                    <?php echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label for="genre_name" class="form-label">ID Thể Loại:</label>
                <input type="hidden" name="genre_id" class="form-control" value="<?= $genre_id ?>" />
                <input type="text" name="genre_id" class="form-control disabled" value="<?= $genre_id ?>" disabled />
            </div>
            <div class="form-group">
                <label for="genre_name" class="form-label">Tên thể loại:</label>
                <input type="text" name="genre_name" class="form-control" />
            </div>
            <button type="submit" class="btn btn-submit">Cập Nhật</button>
        </form>
    </div>
</div>

<?php unset($_SESSION['auth_message']);
