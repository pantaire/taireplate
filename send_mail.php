<?php

if(!isset($_POST['submit']))
{
    echo "error; erstma allet ausfülln, wa?";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = 'info@taire.de';
$headers = "Von: $visitor_email";

//validate
if(empty($name)||human == unchecked||empty($visitor_email))
{
    echo "name und adresse muss eingegeben sein!";
    exit;
}

mail($to,$subject,$message,$headers);
echo "mail sent";

?>