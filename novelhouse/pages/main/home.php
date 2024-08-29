<?php
$sql = "SELECT books.*, genres.genre_name
        FROM books
        INNER JOIN genres ON books.genre_id = genres.genre_id
        ORDER BY books.views DESC";

$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$books = [];
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $books[] = $row;
}

$heading = "Tiểu Thuyết Thịnh Hành";
$carousel = true;
$limitPage = 8;
include("includes/showcase.php");
