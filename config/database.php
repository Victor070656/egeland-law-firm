<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); // Default XAMPP password is empty
define('DB_NAME', 'lawfirm_db');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    // Check if the database exists, if not, try to create it (for development convenience)
    $conn_no_db = new mysqli(DB_HOST, DB_USER, DB_PASS);
    if (!$conn_no_db->connect_error) {
        $sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
        if ($conn_no_db->query($sql) === TRUE) {
            $conn_no_db->close();
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        } else {
            die("Connection failed: " . $conn->connect_error);
        }
    } else {
        die("Connection failed: " . $conn->connect_error);
    }
}
?>
