<?php
$host = "sl-us-south-1-portal.54.dblayer.com:24179";
$user = "admin";
$pass = "QIFKWOYBCZWUWHHE";
$database = "ipvdb";
$mysqli = new mysqli($host, $user, $pass, $database);
if($mysqli->connect_errno)
        echo "Connection to DB Failed: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
?>
