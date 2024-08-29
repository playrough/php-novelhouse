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
} else {

    $sql = "SELECT * FROM books WHERE book_key = '$book_key'";
    $result = $connect->query($sql);

    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }

    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row) {
        $_SESSION['auth_message'] = 'Mã truyện đã tồn tại !';
    } else {

        $target_path_admin = "assets/images/?";

        if ($_FILES['cover_image']['name'] !== '') {

            $target_path_admin = "assets/images/";
            $target_path_novelhouse = "./../novelhouse/assets/images/";

            $target_path_admin = $target_path_admin . basename($_FILES['cover_image']['name']);
            $target_path_novelhouse = $target_path_novelhouse . basename($_FILES['cover_image']['name']);

            move_uploaded_file($_FILES['cover_image']['tmp_name'], $target_path_admin);
            copy($target_path_admin, $target_path_novelhouse);

        }

        $sql = "INSERT INTO books (book_id, book_key, genre_id, title, cover_image, author, summary, chapters, views, likes)
                VALUES ($book_id, '$book_key', $genre_id, '$title', '$target_path_admin', '$author', '$summary', $chapters, $views, $likes)";

        $result = $connect->query($sql);

        if (!$result) {
            $_SESSION['auth_message'] = "Lỗi khi thực hiện truy vấn: " . $connect->error;
        } else {

            if ($_SESSION['role'] === '1') {
                header('Location: index.php?path=pages/main/books/book_list');
                exit();
            } else {

                $_SESSION['book_key_old'] = "";
                $_SESSION['genre_id_old'] = "";
                $_SESSION['title_old'] = "";
                $_SESSION['author_old'] = "";
                $_SESSION['summary_old'] = "";
                $_SESSION['auth_message'] = 'Thêm tiểu thuyết thành công !';
                header('Location: index.php?path=pages/main/books/book_add');
                exit();

            }

        }

    }

}

$_SESSION['book_key_old'] = $book_key;
$_SESSION['genre_id_old'] = $genre_id;
$_SESSION['title_old'] = $title;
$_SESSION['author_old'] = $author;
$_SESSION['summary_old'] = $summary;
header('Location: index.php?path=pages/main/books/book_add');
