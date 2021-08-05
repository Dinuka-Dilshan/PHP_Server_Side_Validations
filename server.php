<?php

//all the things that are pass through the POST method will be stored in the _POST array. 
//it is gloabal and an associative array.

//htmlspecialchars method will convert any js injections to a html tag. so prevents injections

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']) ;

echo "Your name is:$name<br> 
      Your email is:$email<br>
      Your message is: $message";

?>