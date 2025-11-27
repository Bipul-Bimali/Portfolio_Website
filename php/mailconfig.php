<?php
// mailconfig.php
// Centralized mail configuration for your contact form

// SMTP or PHP mail() settings
$mailConfig = [
    'from_email'    => 'no-reply@bipulbimali.com.np',   // Sender email
    'from_name'     => 'Bipul Bimali Portfolio',        // Sender name
    'to_email'      => 'bipulbimali@gmail.com',         // Recipient email
    'subject_prefix'=> '[Portfolio Contact]',           // Prefix for subject lines
];

// Helper function to send mail
function sendContactMail($name, $email, $message, $mailConfig) {
    // Build subject
    $subject = $mailConfig['subject_prefix'] . " New message from " . $name;

    // Build body
    $body = "You have received a new message from your portfolio contact form:\n\n";
    $body .= "Name: " . htmlspecialchars($name) . "\n";
    $body .= "Email: " . htmlspecialchars($email) . "\n";
    $body .= "Message:\n" . htmlspecialchars($message) . "\n";

    // Wordwrap for safety
    $body = wordwrap($body, 70);

    // Headers
    $headers = "From: " . $mailConfig['from_name'] . " <" . $mailConfig['from_email'] . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send mail
    return mail($mailConfig['to_email'], $subject, $body, $headers);
}
?>
