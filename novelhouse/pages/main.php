<?php $path = isset($_GET['path']) ? $_GET['path'] : "pages/main/home";

include $path . ".php";
include("main/keyword.php");
