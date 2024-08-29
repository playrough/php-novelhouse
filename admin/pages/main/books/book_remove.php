<?php
$book_id = $_GET['book_id'];
$sql = "SELECT cover_image FROM books WHERE book_id = $book_id";
$result = $connect->query($sql);
$row = $result->fetch_assoc();

if (!$row) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

$cover_image_path = $row['cover_image'];

if (file_exists($cover_image_path)) {
    $cover_image_path_novelhouse = "./../novelhouse/" . $cover_image_path;
    unlink($cover_image_path);
    unlink($cover_image_path_novelhouse);
}

$sql = "DELETE FROM books WHERE book_id = $book_id";
$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    exit();
}

header("Location: index.php?path=pages/main/books/book_list");