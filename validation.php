<?php

$connection = mysqli_connect("localhost", "root", "jamryan09", "login");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful! Welcome, $username.";
      header("location: index.php");
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
