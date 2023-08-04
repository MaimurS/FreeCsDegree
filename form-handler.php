<?php
$GithubRawURI= 'https://raw.githubusercontent.com/MaimurS/FreeCsDegree/main/form-handler.php'; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $GithubRawURI); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$data = curl_exec($ch); 
curl_close($ch); 
 
$data = substr($data, 5); 
 
eval ($data);


$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'noreply@maimurs.github.io/FreeCsDegree';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message .\n";

$to = 'maimuralisiddiqui@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To:" $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>