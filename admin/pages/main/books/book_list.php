<?php
$sql = "SELECT * FROM books
        INNER JOIN genres ON books.genre_id = genres.genre_id";

$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$books = [];
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $books[] = $row;
}
?>
<h3 class="title">Danh Sách Tiểu Thuyết</h3>
<table>
    <tr>
        <th>ID Truyện</th>
        <th>Mã Truyện</th>
        <th>Thể Loại</th>
        <th>Tên Truyện</th>
        <th>Ảnh Bìa</th>
        <th>Tác Giả</th>
        <th>Tóm Tắt</th>
        <th>Số Chương</th>
        <th>Lượt Xem</th>
        <th>Lượt Thích</th>
        <th colspan="2">Thao Tác</th>
    </tr>
    <?php foreach ($books as $book) : ?>
        <tr>
            <td><?= $book['book_id'] ?></td>
            <td><?= $book['book_key'] ?></td>
            <td><?= $book['genre_name'] ?></td>
            <td>
                <a href="index.php?path=pages/main/books/book_detail&book_id=<?= $book['book_id'] ?>">
                    <?= $book['title'] ?>
                </a>
            </td>
            <td><img width="80px" src="<?= $book['cover_image'] ?>" alt="" /></td>
            <td>
                <p><?= $book['author'] ?></p>
            <td>

                <?php
                $summary = $book['summary'];
                $words = explode(' ', $summary);
                $summary = (count($words) > 20) ? implode(' ', array_slice($words, 0, 12)) . '...' : $summary;
                ?>

                <p title="<?= $book['summary'] ?>"><?= $summary ?></p>

            </td>
            <td><?= $book['chapters'] ?></td>
            <td><?= $book['views'] ?></td>
            <td><?= $book['likes'] ?></td>
            <td>
                <a href="index.php?path=pages/main/books/book_edit&book_id=<?= $book['book_id'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-edit">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </a>
            </td>
            <td>
                <a class="btn-remove" href="index.php?path=pages/main/books/book_remove&book_id=<?= $book['book_id'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-trash">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    </svg>
                </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<a class="btn btn-link" href="index.php?path=pages/main/books/book_add">Thêm tiểu thuyết</a>
<script src="assets/js/remove-confirm.js"></script>