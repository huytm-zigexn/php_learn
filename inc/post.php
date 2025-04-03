<?php

// check the honeypot
$honeypot = filter_input(INPUT_POST, 'nickname', FILTER_DEFAULT);
$honeypot = htmlspecialchars($honeypot);
if ($honeypot) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
}

// validate name
$name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
$name = htmlspecialchars($name);
$inputs['name'] = $name;
if (!$name || trim($name) === '') {
    $errors['name'] = 'Please enter your name';
}

// validate email
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;
if ($email) {
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $errors['email'] = 'Please enter a valid email';
    }
} else {
    $errors['email'] = 'Please enter an email';
}

// validate subject
$subject = filter_input(INPUT_POST, 'subject', FILTER_DEFAULT);
$subject = htmlspecialchars($subject);
$inputs['subject'] = $subject;
if (!$subject || trim($subject) === '') {
    $errors['subject'] = 'Please enter the subject';
}

// validate message
$message = filter_input(INPUT_POST, 'message', FILTER_DEFAULT);
$message = htmlspecialchars($message);
$inputs['message'] = $message;
if (!$message || trim($message) === '') {
    $errors['message'] = 'Please enter the message';
}