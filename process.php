<?php
include 'config.php';

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $hashedPassword = GLOBAL_PASSWORD_HASH;

    if (password_verify($password, $hashedPassword)) {
        echo "Password correct!";
    } else {
        echo "Password incorrect. Please try again.";
    }
} else {
    echo "Password not provided.";
}
?>
