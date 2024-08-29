<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials for demonstration purposes
    $validUsername = "Jayden";
    $validPassword = "Jaydenferns";

    if ($username == $validUsername && $password == $validPassword) {
        echo "Login successful. Welcome, " . htmlspecialchars($username) . "!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
