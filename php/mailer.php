<?php
function sendEmail($to, $subject, $templatePath, $placeholders = []) {
    $config = include(__DIR__ . '/../config/config.php');

    // Load and process template
    $body = file_get_contents($templatePath);
    foreach ($placeholders as $key => $value) {
        $body = str_replace("{{{$key}}}", $value, $body);
    }

    // SMTP connection
    $socket = fsockopen($config['smtp_host'], $config['smtp_port'], $errno, $errstr, 30);
    if (!$socket) {
        return "Connection failed: $errstr ($errno)";
    }

    // Helper functions
    $get_response = function($sock) {
        $res = "";
        while ($line = fgets($sock, 515)) {
            $res .= $line;
            if (substr($line, 3, 1) == " ") break;
        }
        return $res;
    };
    $send_command = function($sock, $cmd) use ($get_response) {
        fwrite($sock, $cmd . "\r\n");
        return $get_response($sock);
    };

    // SMTP handshake
    $get_response($socket);
    $send_command($socket, "EHLO localhost");
    $send_command($socket, "AUTH LOGIN");
    $send_command($socket, base64_encode($config['smtp_user']));
    $send_command($socket, base64_encode($config['smtp_pass']));
    $send_command($socket, "MAIL FROM:<{$config['from_email']}>");
    $send_command($socket, "RCPT TO:<$to>");
    $send_command($socket, "DATA");

    // Headers + body
    fwrite($socket, "Subject: $subject\r\n");
    fwrite($socket, "From: {$config['from_name']} <{$config['from_email']}>\r\n");
    fwrite($socket, "To: $to\r\n");
    fwrite($socket, "MIME-Version: 1.0\r\n");
    fwrite($socket, "Content-Type: text/html; charset=UTF-8\r\n");
    fwrite($socket, "\r\n$body\r\n.\r\n");

    $get_response($socket);
    $send_command($socket, "QUIT");
    fclose($socket);

    return "Email sent successfully to $to";
}
