<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['status'])) {

        if ($_POST['status'] === 'toggle') {

            if (!isset($_SESSION['sidebar_status'])) {
                $_SESSION['sidebar_status'] = '';
            }

            if ($_SESSION['sidebar_status'] === 'closed') {
                $_SESSION['sidebar_status'] = '';
            } else {
                $_SESSION['sidebar_status'] = 'closed';
            }

        }

        echo json_encode(array('success' => true));
        exit;

    } else {

        http_response_code(400);
        echo json_encode(array('error' => 'Invalid data'));
        exit;

    }

} else {

    http_response_code(405);
    echo json_encode(array('error' => 'Method not allowed'));
    exit;
    
}
