<?php
$from = "changeThis@gmail.com";
$to = "changeThis@gmail.com";
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$message = Trim(stripslashes($_POST['message']));
$promo = Trim(stripslashes($_POST['promo']));

$body ="";
$body .="Name: ";
$body .=$name;
$body .="\n";
$body .="Email: ";
$body .=$email;
$body .="\n";
$body .="Message: ";
$body .=$message;
$body .="\n";
$body .="Promo accepted? ";
$body .=$promo;
$body .="\n";


$go = mail($to, $subject, $body, "From:<$from>");

if($go){
	print("Success!");
}
else{
	print("Unable to send!!");
}


?>