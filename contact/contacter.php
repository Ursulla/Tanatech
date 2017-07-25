
<?php

// Get values from the form
$name=$_POST['name'];
$firstname=$_POST['firstname'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$monmessage=$_POST['monmessage'];
 
$to = "ursullafreddylie@gmail.com";
$subject = "Mon Contact Form";
$message = " Name: " . $name . "\r\n Firstname: " . $firstname ."\r\n City: " . $city . "\r\n Phone: " . $phone . "\r\n Email: " . $email . "\r\n Monmessage: " . $monmessage;
 
 
$from = "Tanatech";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
$headers .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-Transfer-Encoding: 8bit \r\n";
	
if(mail($to,$subject,$message,$headers))
{
	
  //print "<script>document.location.href='../index.html';</script>";
  redirect('../index.html');
}
else{
  echo "Erreur! Veuillez remplir les Champs Requis.";

}


?>