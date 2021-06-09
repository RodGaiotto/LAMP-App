<?php

$host = "127.0.0.1:3306";
$user = "root";
$pass = "srsystem9823";
$database = "msdb";

$mysqli = new mysqli($host, $user, $pass, $database);

if($mysqli->connect_errno)
        echo "Connection to DB Failed: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
