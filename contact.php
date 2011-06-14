<?php

$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$EmailTo = "bruno0210@gmail.com";
$Subject = Trim(stripslashes($_POST['Subject'])); 
$Name = Trim(stripslashes($_POST['Name'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=kontakterror.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=kontaktok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=kontakterror.html\">";
}

?>
