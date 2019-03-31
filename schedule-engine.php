<?php

    $EmailTo = "handmaidsgirlscollege@gmail.com";
    $Name = Trim(stripslashes($_POST['Name']));
    $Email = Trim(stripslashes($_POST['Email']));
    $Phone = Trim(stripslashes($_POST['Phone']));
    $Persons = Trim(stripslashes($_POST['Persons']));
    $Location = Trim(stripslashes($_POST['Location']));
    $Arrival_Date = Trim(stripslashes($_POST['Arrival-Date']));
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
    $Body .= "Persons: ";
    $Body .= $Persons;
    $Body .= "\n";
    $Body .= "Location: ";
    $Body .= $Location;
    $Body .= "\n";
    $Body .= "Arrival-Date: ";
    $Body .= $Arrival_Date;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $Message;
    $Body .= "\n";

    // send email
    $success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

    // redirect to success page
    if ($success){
      print "<meta http-equiv=\"refresh\" content=\"0;URL=schedule-thanks-m.html\">";
    }
    else{
      print "<meta http-equiv=\"refresh\" content=\"0;URL=schedule-thanks-m.html\">";
    }
?>
