<?php
$genre_id = $_POST['genre_id'];
$genre_name = $_POST['genre_name'];

if (trim($genre_name) == "") {
    $_SESSION['auth_message'] = 'Tên thể loại không được bỏ trống !';
} else {

    $sql = "SELECT genre_name FROM genres WHERE genre_id = $genre_id";
    $result = $connect->query($sql);

    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }

    $row = $result->fetch_array(MYSQLI_ASSOC);

    if ($row && $row['genre_name'] !== $genre_name) {

        $sql = "SELECT * FROM genres WHERE genre_name = '$genre_name'";
        $result = $connect->query($sql);

        if (!$result) {
            die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
            exit();
        }

        $row = $result->fetch_array(MYSQLI_ASSOC);

        if ($row) {
            $_SESSION['auth_message'] = 'Tên thể loại đã tồn tại !';
            header('Location: index.php?path=pages/main/genres/genre_edit');
            exit();
        }

    }

    $sql = "UPDATE genres SET genre_name = '$genre_name' WHERE genre_id = $genre_id";
    $result = $connect->query($sql);

    if (!$result) {
        $_SESSION['auth_message'] = "Lỗi khi thực hiện truy vấn: " . $connect->error;
    } else {
        header("Location: index.php?path=pages/main/genres/genre_list");
        exit();
    }
    
}

header('Location: index.php?path=pages/main/genres/genre_edit');
