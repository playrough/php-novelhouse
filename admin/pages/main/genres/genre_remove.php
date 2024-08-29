<?php
$genre_id = $_GET['genre_id'];
$sql = "DELETE FROM genres WHERE genre_id = $genre_id";
$result = $connect->query($sql);

if (!$result) {
    $_SESSION['auth_message'] = "Lỗi khi thực hiện truy vấn: " . $connect->error;
}

header("Location: index.php?path=pages/main/genres/genre_list");
