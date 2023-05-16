<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "hotelnewstar@gmail.com";  // Replace with the recipient email address
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Construct the email headers
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Failed to send email.";
  }
}
?>
