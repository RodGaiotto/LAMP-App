<?php

$host = "sl-us-south-1-portal.25.dblayer.com:41969";
$user = "admin";
$pass = "YVVIBOUSWCGEVYSW";
$database = "ptdb";

$mysqli = new mysqli($host, $user, $pass, $database);

if($mysqli->connect_errno)
        echo "Connection to DB Failed: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
