<!-- sendEmail.php -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'polankichandana@gmail.com';
    $subject = 'Test Email';
    $message = 'This is a test email message.';
    $headers = 'From: k.s.shamaanjum.2002@gmail.com';

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send email']);
    }
}
?>

