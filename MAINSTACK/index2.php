
<?php
include ("connector.php");

$consult = sprintf("SELECT * FROM main");

$con = $mysqli -> query($consult) or die($mysqli -> error);

$VCSAC2 = "VCSAC2";
$SSCDQ = "SSCDQ";
$LPAR = "LPAR";
$HOSTF = "HOSTF";
$HOST = "HOST";
$LNXVER = "LNXVER";
$ZVMVER = "ZVMVER";
$SLID = "SLID";
$VMID = "VMID";
$CLASSG = "CLASSG";
$IP = "IP";
$STATUS = "STATUS";
$LOCATION = "LOCATION";
$SLL = "SLL";
$FLL = "FLL";
$IM1 = "IM1";
$IM2 = "IM2";
	
?>
<html>
               <table>
		       <tr>
                        <th align=center>VCS(AC2)</th>
                        <th align=center>SSCD Queue</th>
			<th align=center>LPAR</th>
                        <th align=center>Full Host</th>
                        <th align=center>Host</th>
                     	<th align=center>Linux Version</th>
                        <th align=center>zVM Version</th>
                        <th align=center>Slid</th>
                        <th align=center>VMID</th>
                        <th align=center>Class</th>
                        <th align=center>IP</th>
                        <th align=center>Status</th>
                        <th align=center>Location</th>
                        <th align=center>SLL</th>
                        <th align=center>FLL</th>
                        <th align=center>IM1</th>
                        <th align=center>IM2</th>
                        </tr>
                <?php while($dado = $con->fetch_array()){?>
                        <tr>
			<td align=center><?php echo $dado[$VCSAC2]; ?></td>
			<td align=center><?php echo $dado[$SSCDQ]; ?></td>
			<td align=center><?php echo $dado[$LPAR]; ?></td>
			<td align=center><?php echo $dado[$HOSTF]; ?></td>
			<td align=center><?php echo $dado[$HOST]; ?></td>
			<td align=center><?php echo $dado[$LNXVER]; ?></td>
			<td align=center><?php echo $dado[$ZVMVER]; ?></td>
			<td align=center><?php echo $dado[$SLID]; ?></td>
			<td align=center><?php echo $dado[$VMID]; ?></td>
			<td align=center><?php echo $dado[$CLASSG]; ?></td>
			<td align=center><?php echo $dado[$IP]; ?></td>
			<td align=center><?php echo $dado[$STATUS]; ?></td>
			<td align=center><?php echo $dado[$LOCATION]; ?></td>
			<td align=center><?php echo $dado[$SLL]; ?></td>
			<td align=center><?php echo $dado[$FLL]; ?></td>
			<td align=center><?php echo $dado[$IM1]; ?></td>
			<td align=center><?php echo $dado[$IM2]; ?></td>
		        </tr>

                <?php } ?>
                </table>
</html>
