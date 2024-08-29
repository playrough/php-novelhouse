<div class="row">
    <div class="col col-6">
        <h3 class="title">Thêm Thể Loại Mới</h3>
        <form action="index.php?path=pages/main/genres/genre_add_process" method="post">
            <div class="form-group">
                <div class="form-message">
                    <?php echo isset($_SESSION['auth_message']) ? $_SESSION['auth_message'] : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label for="genre_name">Tên thể loại:</label>
                <input type="text" name="genre_name" class="form-control" />
            </div>
            <button type="submit" class="btn btn-submit">Thêm</button>
        </form>
    </div>
</div>

<?php unset($_SESSION['auth_message']);
