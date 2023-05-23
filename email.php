<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'faithroberts708@gmail.com'; // Replace with your email address
  $subject = 'New contact form submission';
  $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo 'Email sent successfully.';
  } else {
    echo 'Sorry, an error occurred. Please try again later.';
  }
}
?>
