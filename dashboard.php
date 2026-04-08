<?php
session_start();

// Check session or cookie
if (!isset($_SESSION['user'])) {

    if (isset($_COOKIE['user'])) {
        $_SESSION['user'] = $_COOKIE['user']; // restore session
    } else {
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<a href="logout.php">Logout</a>

</body>
</html>
