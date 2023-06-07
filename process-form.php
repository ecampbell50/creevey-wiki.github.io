<?php
// Retrieve form data
$name = $_POST['name'];
$affiliation = $_POST['affiliation'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate the form data (you can add more validation if needed)
if (empty($name) || empty($affiliation) || empty($email) || empty($message)) {
    // Handle form validation error
    echo "Please fill in all the required fields.";
    // You can redirect back to the form or display an error message as per your requirements
    exit;
}

// Process the form data (you can modify this part to suit your needs)
$to = "ecampbell50@qub.ac.uk"; // Replace with your email address
$subject = "Form Submission";
$body = "Name: $name\nAffiliation: $affiliation\nEmail: $email\nMessage: $message";

// Send the email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    // Handle successful form submission (e.g., display a success message)
    echo "Thank you for your submission!";
} else {
    // Handle email sending error (e.g., display an error message)
    echo "Oops! Something went wrong. Please try again later.";
}
?>
