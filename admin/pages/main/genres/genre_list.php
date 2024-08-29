<?php
$sql = "SELECT * FROM genres";
$result = $connect->query($sql);

if (!$result) {
    die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
}

$genres = [];
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $genres[] = $row;
}
?>
<h3 class="title">Danh Sách Thể Loại</h3>
<table>
    <tr>
        <th>ID Thể Loại</th>
        <th>Tên Thể Loại</th>
        <th colspan="2">Thao Tác</th>
    </tr>
    <?php foreach ($genres as $genre) : ?>
        <tr>
            <td><?= $genre['genre_id'] ?></td>
            <td>
                <p><?= $genre['genre_name'] ?></p>
            </td>
            <td>
                <a href="index.php?path=pages/main/genres/genre_edit&genre_id=<?= $genre['genre_id'] ?>" style="display: inline-block;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-edit">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                </a>
            </td>
            <td>
                <a class="btn-remove" href="index.php?path=pages/main/genres/genre_remove&genre_id=<?= $genre['genre_id'] ?>" style="display: inline-block;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#364042" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-trash">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    </svg>
                </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<a class="btn btn-link" href="index.php?path=pages/main/genres/genre_add">Thêm thể loại</a>
<script src="assets/js/remove-confirm.js"></script>