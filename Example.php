<?php
require_once("smtpvalidateclass.php");

// the email to validate
$emails = array['joe@gmail.com'];

// an optional sender
$sender = 'user@example.com';

// instantiate the class
$smtpve = new SMTPValidateEmail();

// do the validation
$result = $smtpve->validate($emails, $sender);

// view results
var_dump($result);

// Valid Email?
if ($result) {
  //mail(...);
}
?>
