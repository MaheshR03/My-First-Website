<?php
/**
 * Contact Form Handler - Enhanced Version
 * 
 * Features:
 * ✅ Input validation and sanitization
 * ✅ Professional error handling
 * ✅ Backup logging system
 * ✅ Status message redirects
 * ✅ Security improvements
 * ✅ Email sending with fallbacks
 * 
 * @author GitHub Copilot Assistant
 * @version 2.0 - Enhanced
 * @date 2025-07-15
 */

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and validate input data
    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : '';
    $visitor_email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
    $subject = isset($_POST['subject']) ? trim(htmlspecialchars($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';
    
    // Basic validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($visitor_email) || !filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        
        // Email configuration
        $email_from = 'legouni@gmail.com';
        $email_subject = 'New Form Submission: ' . $subject;
        $email_body = "New contact form submission:\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $visitor_email\n";
        $email_body .= "Subject: $subject\n";
        $email_body .= "Message:\n$message\n";
        $email_body .= "\n---\n";
        $email_body .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
        $email_body .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
        
        $to = 'yoitsme@gmail.com';
        $headers = "From: $email_from\r\n";
        $headers .= "Reply-To: $visitor_email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Save to file first (for development/testing)
        $log_entry = date('Y-m-d H:i:s') . " - Form submission from $name ($visitor_email)\n";
        $log_entry .= "Subject: $subject\n";
        $log_entry .= "Message: $message\n";
        $log_entry .= str_repeat("-", 50) . "\n\n";
        file_put_contents('contact_submissions.log', $log_entry, FILE_APPEND | LOCK_EX);
        
        // Try to send email (suppress warnings for development)
        $email_sent = @mail($to, $email_subject, $email_body, $headers);
        
        if ($email_sent) {
            // Email sent successfully
            header("Location: contact.html?status=success");
            exit();
        } else {
            // Email failed but form was processed - this is normal for local development
            header("Location: contact.html?status=saved");
            exit();
        }
    } else {
        // Validation errors
        $error_string = implode(", ", $errors);
        header("Location: contact.html?status=error&message=" . urlencode($error_string));
        exit();
    }
} else {
    // Not a POST request
    header("Location: contact.html");
    exit();
}
?>
