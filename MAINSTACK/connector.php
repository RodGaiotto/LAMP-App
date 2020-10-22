<?php

$host = "sl-us-south-1-portal.8.dblayer.com:40725";
$user = "admin";
$pass = "NBZAZABSRGEAMUDM";
$database = "msdb";

$mysqli = new mysqli($host, $user, $pass, $database);

if($mysqli->connect_errno)
        echo "Connection to DB Failed: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
