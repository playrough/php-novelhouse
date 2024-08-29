<?php
session_start();
ob_start();
include_once './config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Novelhouse Admin</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon.png" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/utility.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <?php if (!isset($_SESSION['user_id'])) {

        $auth = isset($_GET['auth']) ? $_GET['auth'] : "pages/auth/login";
        include("pages/auth/header.php");
        include $auth . ".php";
        include("pages/auth/footer.php");
        
    } else { ?>

        <div class="wrapper">
            <?php
            include("pages/sidebar.php");
            include("pages/main.php");
            ?>
        </div>

    <?php } ?>

</body>

</html>