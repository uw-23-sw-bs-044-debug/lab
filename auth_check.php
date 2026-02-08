<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['role'])) {
    header("Location: admin_login.php");
    exit();
}

function allowOnly($role) {
    if ($_SESSION['role'] !== $role) {
        header("Location: logout.php");
        exit();
    }
}
