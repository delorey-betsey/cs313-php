<?php
session_start();

if($_POST['action'] == 'Send'){
    $name = $_POST['name'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $captcha = $_POST['cap_code'];
    
if (empty($name) || empty($street) || empty($city) || empty($state) || empty($zip) || empty($email) ||empty($phone) || empty($subject) ||empty($message)){
    $errors['fields'] = 'All fields are required, please fill in each one.';
}

if($_SESSION['security_code'] != $_POST['cap_code'] &&
    !empty($_SESSION['security_code'])) {
    $errors['security'] = 'Sorry, your entered security code does not match the security image.';
    }
if(empty($errors)){
    $finalmessage = "Name: $name \n";
    $finalmessage = "Street: $street \n";
    $finalmessage = "City: $city \n";
    $finalmessage = "State: $state \n";
    $finalmessage = "Zip: $zip \n";
    $finalmessage = "Email: $email \n";
    $finalmessage = "Phone: $phone \n";
    $finalmessage = "Subject: $subject \n";
    $finalmessage = "Message: $message \n";
    
    $to = 'betsey@deloreyfamily.org';
    $from = "From: $email";
    $result = mail($to,$subject, $finalmessage, $from);
    
    if ($result == TRUE) {
            $errors[] = "Thank you $name for contacting Gangbusters Triathlon.";
        } else {
            $errors[] = "Sorry $name but there was an error and your message was not sent to Gangbusters Triathlon.";
        }

unset ($name);
unset ($street);
unset ($city);
unset ($state);
unset ($zip);
unset ($email);
unset ($phone);
unset ($subject);
unset ($message);
unset ($captcha);
    
    include 'registrationform.php';
    exit;
    }
    
} else {
    include 'registrationform.php';
    exit;
}
?>