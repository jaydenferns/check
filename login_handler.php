<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials for demonstration purposes
    $validUsername = "admin";
    $validPassword = "password123";

    if ($username == $validUsername && $password == $validPassword) {
        // Redirect to the main website's homepage or dashboard after successful login
        header("intex.html"); // Adjust this path as necessary
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
