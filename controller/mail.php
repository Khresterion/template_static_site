<?php
@$name = $_POST['name'];
@$email = $_POST['email'];
@$message = $_POST['message'];
@$subject = $_POST['subject'];
header('Content-Type: application/json');
if ($name === '') {
    print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
    exit();
}
if ($email === '') {
    print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
    exit();
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
        exit();
    }
}
if ($subject === '') {
    print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
    exit();
}
if ($message === '') {
    print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
    exit();
}
$content = "From: $name \nEmail: $email \nMessage: $message";
$recipient = "axios.ludis@gmail.com";
$mailheader = "From: $email \r\n";
$status = mail($recipient, $subject, $content, $mailheader, $header);
echo $status ? 'Mail sent' : 'Error sending mail';
print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();
