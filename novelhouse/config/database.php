<?php
header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "novelhub";

$connect = new mysqli($servername, $username, $password, $dbname);

mysqli_set_charset($connect, 'UTF8');

if ($connect->connect_error) {
    die("Không thể kết nối: " . $connect->connect_error);
    exit();
}
