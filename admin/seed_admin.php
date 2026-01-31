<?php
require_once __DIR__ . '/../config/database.php';

$username = 'admin';
$password = 'admin123';

$sql = "SELECT id FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 0) {
    $insert = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt_insert = $conn->prepare($insert);
    $stmt_insert->bind_param("ss", $username, $password);
    
    if ($stmt_insert->execute()) {
        echo "Admin user created successfully.<br>";
        echo "Username: admin<br>";
        echo "Password: admin123<br>";
    } else {
        echo "Error creating admin user: " . $conn->error;
    }
} else {
    echo "Admin user already exists.";
}

$conn->close();
?>
