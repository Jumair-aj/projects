<?php 
$errors = '';
$myemail = 'welkinwitsworks@gmail.com';//<-----Put Your email address here.
$email = $_POST['email'];
$message = $_POST['message']; 

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission from  PT LAM: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Email: $email \n Message: \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: success.html');
} 
?>
