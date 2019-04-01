<?php

    $user = "newsletterphp";
    $password = "pa55w0rd@ancilla";
    $host = "localhost";
    $dbase = "subscribetohagco";
    $table = "email_list";


    $email = $_POST['Email'];

    // $from= 'support@learningaboutelectronics.com';

    $subject = $_POST['subject'];
    $body = $_POST['body'];

    // Connection to DBase
    $dbc = mysqli_connect($host, $user, $password, $dbase)
    or die("Unable to select database");


    $query = "DELETE FROM email_list WHERE email ='$email'";
    $result = mysqli_query ($dbc, $query)
    or die ('Error querying database.');


    print "<meta http-equiv=\"refresh\" content=\"0;URL=unsubscribe-thanks-m.html\">";


    mysqli_close($dbc);
?>
