<?php
// session_start();
include 'includes/connection.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";
    echo "$query";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        // Valid user, set session and redirect to index2.php
        // $_SESSION['username'] = $username;
        header('Location: index2.php');
        exit();
    } else {
        // Invalid user, redirect to index.php
        header('Location: index.php');
        exit();
    }
} else {
    // Redirect to index.php if POST data is not set
    header('Location: index.php');
    exit();
}
