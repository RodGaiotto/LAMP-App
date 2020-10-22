<?php
include("class/connector.php");

$consulta = "SELECT * FROM PERFTRIG";


$conn = $mysqli -> query($consulta) or die($mysqli -> error);

$sanqty= 0;
$dasdqty= 0;

while($num = $conn->fetch_array()){

	$sanqty += $num['SANALLOC'];
	$dasdqty += $num['DASD_USED'];
}

echo "Total of SAN: " . $sanqty . " GBs";
echo "<br>";
echo "<br>";
echo "Total of DASD: " . $dasdqty . " GBs";

?>
