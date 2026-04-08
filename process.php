<?php
session_start();

// Dummy user (for demo)
$valid_email = "admin@gmail.com";
$valid_password = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == $valid_email && $password == $valid_password) {

        // Create session
        $_SESSION['user'] = $email;

        // Cookie for "Remember Me"
        if (isset($_POST['remember'])) {
            setcookie("user", $email, time() + (86400 * 7)); // 7 days
        }

        header("Location: dashboard.php");
    } else {
        echo "Invalid login credentials!";
    }
}
?>
