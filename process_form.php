<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $pickupLocation = $_POST["pickup"];
  $destination = $_POST["destination"];

  // Compose email content
  $subject = "New Form Submission";
  $message = "A new form has been submitted.\n\n";
  $message .= "Name: " . $name . "\n";
  $message .= "Phone Number: " . $phone . "\n";
  $message .= "Pickup Location: " . $pickupLocation . "\n";
  $message .= "Destination: " . $destination . "\n";

  // Set up email headers
  $to = "georginayakoba18@gmail.com"; // Replace with your email address
  $headers = "From: adjayeaggreyg@gmail.com"; // Replace with your website's email address

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Email notification sent successfully!";
  } else {
    echo "Failed to send email notification.";
  }
}
?>