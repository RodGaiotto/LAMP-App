<?php
ob_start();
$conn=$mysqli_connect ("sl-us-south-1-portal.8.dblayer.com:40725","admin","NBZAZABSRGEAMUDM","msdb");
if($conn==false)
{
print"error in connection";
}
?>
