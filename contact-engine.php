
<?php
    $EmailTo = "handmaidsgirlscollege@gmail.com";
    $Name = Trim(stripslashes($_POST['Name']));
    $Phone = Trim(stripslashes($_POST['Phone']));
    $Email = Trim(stripslashes($_POST['Email']));
    $Subject = Trim(stripslashes($_POST['Subject']));
    $Message = Trim(stripslashes($_POST['Message']));

    // validation
    $validationOK=true;
    if (!$validationOK) {
      print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
      exit;
    }

    // prepare email body text
    $Body = "";
    $Body .= "Name: ";
    $Body .= $Name;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $Email;
    $Body .= "\n";
    $Body .= "Phone: ";
    $Body .= $Phone;
    $Body .= "\n";
    $Subject .= "Subject: ";
    $Subject .= $Subject;
    $Subject .= "\n";
    $Body .= "Message: ";
    $Body .= $Message;
    $Body .= "\n";

    // send email
    $success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

    // redirect to success page
    if ($success){
      print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-thanks-m.html\">";
    }
    else{
      print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
    }
?>
