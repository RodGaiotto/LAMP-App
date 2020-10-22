<?php
include("connector1.php");

$consulta = "SELECT * FROM PERFTRIG";


$conn = $mysqli -> query($consulta) or die($mysqli -> error);

$SYSNAME = "SYSNAME";


?>


<html>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>


<body>
<table style="width:100%">
  <tr>
    <th>System</th>
    <th>Client</th>
    <th>Date</th>
  </tr>
	<?php while($dado = $conn->fetch_array()): ?>
  <tr>
    <td><?php echo $dado[$SYSNAME]; ?></td>
    <td>Ozzy</td>
    <td>17/09/22</td>
  </tr>
	<?php endwhile; ?>
</table>

</body>
</html>
