<?php
session_start();

if($_POST['action'] == 'Send'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $captcha = $_POST['cap_code'];
    
if (empty($name) || empty($email) ||empty($subject) ||empty($message)){
    $errors['fields'] = 'All fields are required, please fill in each one.';
}

if($_SESSION['security_code'] != $_POST['cap_code'] &&
    !empty($_SESSION['security_code'])) {
    $errors['security'] = 'Sorry, your entered security code does not match the security image.';
    }
if(empty($errors)){
    $finalmessage = "Name: $name \n";
    $finalmessage = "Email: $email \n";
    $finalmessage = "Subject: $subject \n";
    $finalmessage = "Message: $message \n";
    
    $to = 'betsey@deloreyfamily.org';
    $from = "From: $email";
    $result = mail($to,$subject, $finalmessage, $from);
    
    if ($result == TRUE) {
            $errors[] = "Thank you $name for contacting me.";
        } else {
            $errors[] = "Sorry $name but there was an error and message could not be sent.";
        }

unset ($name);
unset ($email);
unset ($subject);
unset ($message);
unset ($captcha);
    
    include 'contactform.php';
    exit;
    }
    
} else {
    include 'contactform.php';
    exit;
}
?>