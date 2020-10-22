<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

define('DB_SERVER', 'sl-us-south-1-portal.54.dblayer.com:24179');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'QIFKWOYBCZWUWHHE');
define('DB_NAME', 'ipvdb');

/* Attempt to connect to MySQL database */

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection

if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
                   }
?>
