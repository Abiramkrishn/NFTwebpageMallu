<?php
// Simple email processor for Glint contact form
if($_POST) {
    $name = trim(stripslashes($_POST['contactName']));
    $email = trim(stripslashes($_POST['contactEmail']));
    $subject = trim(stripslashes($_POST['contactSubject']));
    $contact_message = trim(stripslashes($_POST['contactMessage']));

    $error = array();

    // Check Name
    if (strlen($name) < 2) {
        $error['name'] = "Please enter your name.";
    }
    // Check Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Please enter a valid email address.";
    }
    // Check Message
    if (strlen($contact_message) < 15) {
        $error['message'] = "Please enter your message. It should have at least 15 characters.";
    }

    if (!$error) {
        // Form submitted successfully
        echo "OK";
    } else {
        $response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
        $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
        $response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
        echo $response;
    }
}
?>
