<?php
// ADD YOUR INFOMATION HERE
$recipient = "jaime@hacedores.com";
$successPage = "contacto.html";

// NO NEED TO EDIT ANYTHING BELOW THIS LINE =====================//


//import form information
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$name=stripslashes($name);
$email=stripslashes($email);
$subject=stripslashes($subject);
$message=stripslashes($message);
$message= "Name: $name, \n\n Message: $message";

/*
Simple form validation
check to see if an email and message were entered
*/
//if no message entered and no email entered print an error
if (empty($message) && empty($email)){
print "Tu correo electr&oacute;nico y tu mensaje no fueron ingresados. <br>Por favor escribe un correo electronico y un mensaje";
}
//if no message entered send print an error
elseif (empty($message)){
print "No escribiste tu mensaje.<br>Por favor escribe tu mensaje<br>";
}
//if no email entered send print an error
elseif (empty($email)){
print "No escribiste una direcci&oacute;n de correo electr&oacute;nico<br>Por favor escribe tu correo electr&oacute;nico. <br>";
}
//if the form has both an email and a message
else {

//mail the form contents
mail( "$recipient", "$subject", "$message", "From: $email" );
header("Location: $successPage");
}

?>