<?php
require_once 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and Validate Input
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_SPECIAL_CHARS);
    $subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Determine redirect page
    $redirect_page = 'contact.php';
    if (isset($_POST['redirect']) && in_array($_POST['redirect'], ['index.php', 'contact.php'])) {
        $redirect_page = $_POST['redirect'];
    }

    // Basic Validation
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: $redirect_page?error=missing_fields#contact-form");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: $redirect_page?error=invalid_email#contact-form");
        exit;
    }

    // Prepare SQL Statement
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
        
        if ($stmt->execute()) {
            // Success
            header("Location: $redirect_page?success=1#contact-form");
        } else {
            // Database Error
             header("Location: $redirect_page?error=db_error#contact-form");
        }
        $stmt->close();
    } else {
         header("Location: $redirect_page?error=stmt_error#contact-form");
    }
    
    $conn->close();
} else {
    // Direct access not allowed
    header("Location: contact.php");
    exit;
}
?>