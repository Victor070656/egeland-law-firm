<?php
session_start();
require_once '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: login.php?error=Please fill in all fields");
        exit;
    }

    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $db_password);
        $stmt->fetch();

        if ($password === $db_password) {
            // Password is correct, start a new session
            session_regenerate_id();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            
            header("Location: index.php");
        } else {
             header("Location: login.php?error=Invalid credentials");
        }
    } else {
         header("Location: login.php?error=Invalid credentials");
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: login.php");
    exit;
}
?>
