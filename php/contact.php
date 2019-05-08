<?php
$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Personal Web hasnainnaeemmk@gmail.com' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// the message
$msg = "Message sent by: " . htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname']) . '<br/>' .
    '<br />' . "Sender's Email: " . htmlspecialchars($_POST['email']) . "<br />";
$msg = $msg . $_POST['message'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("hasnainnaeemmk@gmail.com","Message by " . $_POST['fname'] . " from Personal Website", $msg, $headers);
echo "<br /><b>Thank you " . $_POST['fname'] . " for contacting me! I'll get in touch with you soon.</b></p>"
?>