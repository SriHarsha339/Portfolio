<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$EmailTo = "harshakota339@gmail.com";
$Subject = "Kota you have New Message Go check it Out !!!!";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Subject,  $Fields, "From:".$email);

