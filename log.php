<?php
// Get request method, requested URL with query parameters, and client's IP address
$method = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];
$ip = $_SERVER['REMOTE_ADDR'];

// Format log message
$logMessage = sprintf("[%s] %s %s %s\n", date('Y-m-d H:i:s'), $method, $url, $ip);

// Log message to file
file_put_contents('requests.txt', $logMessage, FILE_APPEND);

// Send response with alert message
echo "<script>alert('Good morning my good friends! 😊');</script>";
?>
