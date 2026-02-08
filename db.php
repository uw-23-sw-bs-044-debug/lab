<?php
$conn = mysqli_connect("localhost", "root", "", "service_booking");


mysqli_query($conn,
"UPDATE bookings
 SET status='Service Done'
 WHERE status='Confirmed'
 AND date < CURDATE()");


if (!$conn) {
    die("Database connection failed");
}
