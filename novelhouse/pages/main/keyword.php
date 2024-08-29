<?php
if (!isset($_SESSION['genres_and_author'])) {

    $sql = "SELECT * FROM genres";
    $result = $connect->query($sql);

    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    }

    $rows = [];
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $rows[] = $row;
    }

    $sql = "SELECT DISTINCT author FROM books";
    $result = $connect->query($sql);

    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
    }

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $rows[] = $row;
    }

    shuffle($rows);
    $rows = array_slice($rows, 0, 20);

    $_SESSION['genres_and_author'] = $rows;

} else {
    $rows = $_SESSION['genres_and_author'];
}

include("includes/keyword.php");
