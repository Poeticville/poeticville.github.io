
<?php
    $user = "newsletterphp";
    $password = "pa55w0rd@ancilla";
    $host = "localhost";
    $dbase = "subscribetohagco";
    $table = "email_list";


    $email= $_POST['email'];


    // Connection to DBase
    $dbc= mysqli_connect($host, $user, $password, $dbase)
    or die("Unable to select database");


    $query = "INSERT INTO email_list(email)
    VALUES('$email')";

    echo $query;

    mysqli_query ($dbc, $query)
    or exit( mysqli_error($dbc) );

    // echo 'You have been successfully added.' . '<br>';
    print "<meta http-equiv=\"refresh\" content=\"0;URL=subscribe-thanks-m.html\">";

    mysqli_close($dbc);
?>
