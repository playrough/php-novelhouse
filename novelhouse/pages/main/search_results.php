<?php
if (isset($_SESSION['search_result'])) {

    $books = $_SESSION['search_result'];
    $searchKey = $_SESSION['search_key'];

    $heading = "Kết quả tìm kiếm của \"$searchKey\"";
    $carousel = false;
    $limitPage = 10;
    include("includes/showcase.php");
    
} else {
    $searchMessage = $_SESSION['search_message'];
    include('includes/search_results.php');
}
