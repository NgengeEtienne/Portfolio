<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];

  $to = "ngengeetienne@gmail.com";
  $subject = "Message from website: $subject";
  $message = "
  <html>
  <head>
    <title>Message from POrtfolio</title>
  </head>
  <body>
    <p>Name: $name</p>
    <p>Email: $email</p>
    <p>Message: $msg</p>
  </body>
  </html>
  ";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: ' . $email . "\r\n";

  mail($to, $subject, $message, $headers);

  header("Location: index.html");
  exit;
}
