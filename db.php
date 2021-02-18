<?php


    $server="sql309.epizy.com	    ";
    $username="epiz_27923868";
    $password="mQ6cz0zKPPZm90    ";
    $dbname="epiz_27923868_coronavirusupdates";
    $conn = mysqli_connect( $server,
    $username,
    $password,
    $dbname);

    if(!$conn){
        die("connection Failed:".mysqli_connect_error());
    }

    ?>