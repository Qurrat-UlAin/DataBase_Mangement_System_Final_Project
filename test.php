<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$to_email = "ziaulrehman41552@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is a test email sent by PHP Script";
$headers = "From: qurratulain0302@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
    echo error_get_last()['message']; // Display the last error message
}
?>



