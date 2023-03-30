<?php 
echo "<pre>";
    print_r($_POST);
echo "<pre>";
    $message_sent = false;
    if (isset($_POST['email']) && $_POST['email'] != '') {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $name = $_POST['name'];
            $mailfrom = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "joshuagiff03@gmail.com";
            $body = "";

            $body .= "From: ".$name. "\r\n";
            $body .= "Email: ".$mailfrom. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to, $message, $body);

            $message_sent = true;
        }
    }
?>