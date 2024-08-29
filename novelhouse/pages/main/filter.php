<?php
$genre_id = $_GET["genre_id"];

$sql = "SELECT *
        FROM genres
        WHERE genres.genre_id = $genre_id";

$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$genre = $result->fetch_array(MYSQLI_ASSOC);

$sql = "SELECT *
        FROM books
        INNER JOIN genres ON books.genre_id = genres.genre_id
        WHERE books.genre_id = $genre_id";

$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$books = [];
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $books[] = $row;
}

$heading = "Thể Loại " . $genre['genre_name'];
$carousel = true;
$limitPage = 8;
include("includes/showcase.php");
