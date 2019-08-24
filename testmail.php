<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "liyamaknun03@gmail.com";
    $to = "dimastanuji@gmail.com";
    $subject = "Coba Subject";
    $message = "Ini email coba coba";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
    // elydabrilian@gmail.com
?>