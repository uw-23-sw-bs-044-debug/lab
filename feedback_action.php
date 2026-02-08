<?php
include "db.php";

if(isset($_GET['id']) && isset($_GET['action'])){

$id = $_GET['id'];
$action = $_GET['action'];

if($action == "approve"){
    mysqli_query($conn,"UPDATE feedback SET status='approved' WHERE id='$id'");
}

elseif($action == "reject"){
    mysqli_query($conn,"UPDATE feedback SET status='rejected' WHERE id='$id'");
}

elseif($action == "delete"){
    mysqli_query($conn,"DELETE FROM feedback WHERE id='$id'");
}

header("Location: admin_dashboard.php");
exit();
}
?>
