<?php
$book_id = isset($_GET['book_id']) ? $_GET['book_id'] : $_SESSION['book_id_review'];
$_SESSION['book_id_review'] = $book_id;

if (!isset($_SESSION['seen' . $book_id])) {

    $sql = "UPDATE  books
    SET     views = views + 1
    WHERE   book_id = $book_id";

    $result = $connect->query($sql);

    if (!$result) {
        $_SESSION['auth_message'] = "Lỗi khi thực hiện truy vấn: " . $connect->error;
    }

    $_SESSION['seen' . $book_id] = $book_id;

}

$sql = "SELECT *
        FROM books
        INNER JOIN genres ON books.genre_id = genres.genre_id
        WHERE books.book_id = $book_id";

$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$book = $result->fetch_array(MYSQLI_ASSOC);
include('includes/review.php');
