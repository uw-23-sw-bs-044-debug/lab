<?php
include 'auth_check.php';
allowOnly('admin');
include 'db.php';

$id = $_GET['id'];
$action = $_GET['action'];

if ($action === 'activate') {
    mysqli_query($conn, "UPDATE employees SET status='active' WHERE id='$id'");
}

if ($action === 'deactivate') {
    mysqli_query($conn, "UPDATE employees SET status='inactive' WHERE id='$id'");
}

if ($action === 'delete') {
    mysqli_query($conn, "DELETE FROM employees WHERE id='$id'");
}

header("Location: admin_dashboard.php");
exit();
