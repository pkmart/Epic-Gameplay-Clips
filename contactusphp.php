<?php

$msg =  "Visitor name".$_POST['vname'];
$msg .=  "<br> Visitor email".$_POST['vemail']."<br>";
$msg .=  "<br> essage subject".$_POST['msub']."<br>";
// the message
$msg .=  "Message<br>".$_POST['msg'];

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
//mail("someone@example.com","My subject",$msg);
//mail($to, $subject, $message, $headers);

$to = 'bob@example.com';

 if(isset($_POST["submit"]) && isset($_POST['msg']) && isset($_POST['vemail'])){

$subject = 'Website Change Request';

$headers = "From: " . strip_tags('pkatshianga@yahoo.com') . "\r\n";
$headers .= "Reply-To: ". strip_tags('pkatshianga@yahoo.com') . "\r\n";
$headers .= "CC: \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

//$message .= '<p><strong>This is strong text</strong> while this is not.</p>';


mail("pkatshianga@yahoo.com", "Message from EGC visitor", $msg, $headers);

header("Location: contact-us.php?msg=notsend");
exit();

 }else{
      header("Location: contact-us.php?msg=notsend");
        exit();
 }
?>