<?php
session_start();
include '../config/database.php';

if (isset($_GET['action']) && $_GET['action'] == 'register') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashed_password);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../public/login.php?status=success");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// --- LOGIN LOGIC ---
if (isset($_GET['action']) && $_GET['action'] == 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['name'];
            header("Location: ../../local_kalana/index.php");
        } else {
            header("Location: ../public/login.php?error=invalid_credentials");
        }
    } else {
        header("Location: ../public/login.php?error=invalid_credentials");
    }
}
?>