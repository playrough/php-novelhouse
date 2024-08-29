<?php
$book_id = $_GET['book_id'];

if (!isset($_SESSION['liked' . $book_id])) {

    $sql = "UPDATE  books
            SET     likes = likes + 1
            WHERE   book_id = $book_id";

    $result = $connect->query($sql);

    if (!$result) {
        $_SESSION['auth_message'] = "Lỗi khi thực hiện truy vấn: " . $connect->error;
    }

    $_SESSION['liked' . $book_id] = $book_id;

} else {
    $_SESSION['message'] = 'Bạn đã thích sách này rồi !';
}

header('Location: index.php?path=pages/main/review&book_id=' . $book_id);
