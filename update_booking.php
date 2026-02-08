<?php
include 'auth_check.php';
allowOnly('admin');
include 'db.php';

$id = $_GET['id'] ?? null;
$action = $_GET['action'] ?? null;

if (!$id || !$action) {
    header("Location: admin_dashboard.php");
    exit();
}

$id = mysqli_real_escape_string($conn, $id);

if ($action === 'confirm') {
    $sql = "UPDATE bookings SET status='confirmed' WHERE id='$id'";
}
elseif ($action === 'reject') {
    $sql = "UPDATE bookings SET status='cancelled' WHERE id='$id'";
}
elseif ($action === 'delete') {
    $sql = "DELETE FROM bookings WHERE id='$id'";
}

if (isset($sql)) {
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

header("Location: admin_dashboard.php");
exit();
