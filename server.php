<?php

//all the things that are pass through the POST method will be stored in the _POST array. 
//it is gloabal and an associative array.

//htmlspecialchars method will convert any js injections to a html tag. so prevents injections

$toppings = htmlspecialchars($_POST['toppings']);
$email = htmlspecialchars($_POST['email']);
$type = htmlspecialchars($_POST['type']) ;

echo "Your name is:$toppings<br> 
      Your email is:$email<br>
      Your message is: $type";

?>