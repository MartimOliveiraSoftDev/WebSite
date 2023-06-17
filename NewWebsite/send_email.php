<?php

$email_to = "martim.olv@gmail.com";
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$headers = "From: $name <$email>";

if ( mail($email_to, $subject, $message, $headers) ) {
  echo "success";
} else {
  echo "not sent";
}
?>