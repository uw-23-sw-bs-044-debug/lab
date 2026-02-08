<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<form action="admin_auth.php" method="POST">
    <h2>Login</h2>
 <!-- NEW -->
    <select name="role" required>
        <option value="">Login as</option>
        <option value="admin">Admin</option>
        <option value="employee">Employee</option>
    </select>
    <input type="text" name="username" placeholder="Username" required>

    <input type="password" name="password" placeholder="Password" required>

   

    <button type="submit">Login</button>
</form>

</body>
</html>
