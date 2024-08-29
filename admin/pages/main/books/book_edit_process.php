<?php
$book_id = $_POST['book_id'];
$book_key = $_POST['book_key'];
$genre_id = $_POST['genre_id'];
$title = $_POST['title'];
$author = $_POST['author'];
$summary = $_POST['summary'];
$chapters = $_POST['chapters'];
$views = $_POST['views'];
$likes = $_POST['likes'];
$cover_image_old = $_POST['cover_image_old'];


if (trim($book_key) == "") {
    $_SESSION['auth_message'] = 'Mã truyện không được bỏ trống !';
} elseif (trim($genre_id) == "") {
    $_SESSION['auth_message'] = 'Thể loại không được bỏ trống !';
} elseif (trim($title) == "") {
    $_SESSION['auth_message'] = 'Tên truyện không được bỏ trống !';
} elseif (trim($author) == "") {
    $_SESSION['auth_message'] = 'Tác giả không được bỏ trống !';
} elseif (trim($summary) == "") {
    $_SESSION['auth_message'] = 'Tóm tắt không được bỏ trống !';
} elseif (trim($chapters) == "") {
    $_SESSION['auth_message'] = 'Số chương không được bỏ trống !';
} elseif (trim($views) == "") {
    $_SESSION['auth_message'] = 'Lượt xem không được bỏ trống !';
} elseif (trim($likes) == "") {
    $_SESSION['auth_message'] = 'Lượt thích không được bỏ trống !';
} else {

    $sql = "SELECT book_key FROM books WHERE book_id = $book_id";
    $result = $connect->query($sql);

    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }

    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row && $row['book_key'] !== $book_key) {

        $sql = "SELECT * FROM books WHERE book_key = '$book_key'";
        $result = $connect->query($sql);

        if (!$result) {
            die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
            exit();
        }

        $row = $result->fetch_array(MYSQLI_ASSOC);

        if ($row) {
            $_SESSION['auth_message'] = 'Mã truyện đã tồn tại !';
            header('Location: index.php?path=pages/main/books/book_edit');
            exit();
        }

    }

    if ($_FILES['cover_image']['name'] !== '') {

        $cover_image_old_novelhouse = "./../novelhouse/" . $cover_image_old;
        unlink($cover_image_old);
        unlink($cover_image_old_novelhouse);

        $target_path_admin = "assets/images/";
        $target_path_novelhouse = "./../novelhouse/assets/images/";

        $target_path_admin = $target_path_admin . basename($_FILES['cover_image']['name']);
        $target_path_novelhouse = $target_path_novelhouse . basename($_FILES['cover_image']['name']);

        move_uploaded_file($_FILES['cover_image']['tmp_name'], $target_path_admin);
        copy($target_path_admin, $target_path_novelhouse);

    } else {
        $target_path_admin = $cover_image_old;
    }

    $sql = "UPDATE  books
            SET     book_key = '$book_key',
                    genre_id = $genre_id,
                    title = '$title',
                    cover_image = '$target_path_admin',
                    author = '$author',
                    summary = '$summary',
                    chapters = $chapters,
                    views = $views,
                    likes = $likes
            WHERE   book_id = $book_id";

    $result = $connect->query($sql);

    if (!$result) {
        $_SESSION['auth_message'] = "Lỗi khi thực hiện truy vấn: " . $connect->error;
    } else {
        header('Location: index.php?path=pages/main/books/book_list');
        exit();
    }
    
}

header('Location: index.php?path=pages/main/books/book_edit');
