<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "admin" && $pass == "password123") {
        echo "Login Successful!";
    } else {
        echo "Incorrect login";
    }
}
?>
