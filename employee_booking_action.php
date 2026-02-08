<?php
include 'auth_check.php';
allowOnly('employee');
include 'db.php';

$id = $_GET['id'];
$action = $_GET['action'];

if ($action === 'start') {
    mysqli_query($conn, "UPDATE bookings SET status='in_progress' WHERE id='$id'");
}

if ($action === 'complete') {
    mysqli_query($conn, "UPDATE bookings SET status='completed' WHERE id='$id'");
}

if ($action === 'cancel') {
    mysqli_query($conn, "UPDATE bookings SET status='cancelled' WHERE id='$id'");
}

header("Location: employee_dashboard.php");
exit();
