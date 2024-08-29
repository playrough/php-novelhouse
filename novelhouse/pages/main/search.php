<?php
unset($_SESSION['search_result']);
unset($_SESSION['search_key']);
unset($_SESSION['search_message']);

if (isset($_REQUEST['submit'])) {
    $search = addslashes($_POST['search']);
} else {
    $search = addslashes($_GET['search_key']);
}

if (empty($search)) {
    $_SESSION['search_message'] = "Vui lòng nhập vào trường tìm kiếm!";
    header("Location: index.php?path=pages/main/search_results");
    exit();
} else {

    $sql = "SELECT *
                FROM books
                INNER JOIN genres ON books.genre_id = genres.genre_id
                WHERE books.title LIKE '%$search%'
                OR books.author LIKE '%$search%'
                OR genres.genre_name LIKE '%$search%'";

    $result = $connect->query($sql);
    
    if (!$result) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
        exit();
    }

    $books = [];
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $books[] = $row;
    }

    if (empty($books)) {
        $_SESSION['search_message'] = "Rất tiếc! Không có kết quả được tìm thấy!";
        header("Location: index.php?path=pages/main/search_results");
        exit();
    } else {
        $_SESSION['search_result'] = $books;
        $_SESSION['search_key'] = $search;
        header("Location: index.php?path=pages/main/search_results");
        exit();
    }

}
