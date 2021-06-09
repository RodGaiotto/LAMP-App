<?php

$host = "localhost";
$user = "root";
$pass = "srsystem9823";
$database = "PERFBASE";

$mysqli = new mysqli($host, $user, $pass, $database);

if($mysqli->connect_errno)
        echo "Connection to DB Failed: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
