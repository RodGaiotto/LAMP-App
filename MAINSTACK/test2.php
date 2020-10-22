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
<!DOCTYPE html>
<html>
<head>
	<title>DataTables example - Individual column searching (text inputs)</title>	
	<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
	<style type="text/css" class="init">
	
	tfoot input {
		width: 100%;
		padding: 3px;
		box-sizing: border-box;
	}


	</style>
<!-- DROP BOX -->
	<script src="script.js"></script>
	<script type="text/javascript" language="javascript" src="jquery-1.12.4.js"></script>
	<script type="text/javascript" language="javascript" src="jquery.dataTables.min.js"></script>
	<script type="text/javascript" class="init">
	

$(document).ready(function() {
	// Setup - add a text input to each footer cell
$('#example thead th').each( function () {
        var title = $('#example tfoot th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder='+title+' />' );
    } );
 
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().eq( 0 ).each( function ( colIdx ) {
        $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } );
    } );
} );

	</script>
</head>
<body class="wide comments example">
<table id="example" class="display" style="width:100%" style="font-size:13px">	
		    <thead>   
            <tr>
                        <th align=left>VCS(AC2)</th>
                        <th align=left>Full Name</th>
			<th align=left>LPAR</th>
                        <th align=left>First Line Leader</th>
			<th align=left>Iteration Manager</th>
             </tr>
             </thead>
                <?php while($dado = $con->fetch_array()){?>
            
            <tbody>
            <tr>
			<td align=left><?php echo $dado[$VCSAC2]; ?></td>
			<!-- POPUP BOX -->
                        <td align=left style="font-size:14px">
				<b>
                                <a id="sysname" class="button" href="#popup<?php echo $dado[$HOSTF] ?>" style="text-decoration:none;" >
                                <?php echo $dado[$HOSTF]; ?>
                                </a>
				</b>	
                                <div id="popup<?php echo $dado[$HOSTF] ?>" class="overlay">
                                <div class="popup">
                                <h4><?php echo $dado[$HOSTF]; ?></h4>
                                <a class="close" href="#">&times;</a>
                                <div class="content">
                                <?php
					echo "<b>Status: </b>";
				        echo $dado[$STATUS];
				        echo "<br>";
					echo "<b>Host: </b>";		 
					echo $dado[$HOST];
					echo "<br>";
					echo "<b>VMID: </b>";		 
					echo $dado[$VMID];
					echo "<br>";
					echo "<b>IP: </b>";		 
					echo $dado[$IP];
					echo "<br>";		 
					echo "<b>Class: </b>";		 
					echo $dado[$CLASSG];
					echo "<br>";
					echo "<b>SSCD Queue: </b>";		 
					echo $dado[$SSCDQ];
					echo "<br>";
					echo "<b>Linux OS Ver: </b>";		 
					echo $dado[$LNXVER];
					echo "<br>";
					echo "<b>z/VM OS Ver: </b>";		 
					echo $dado[$ZVMVER] . " " . $dado[$SLID];
					echo "<br>";
					echo "<b>Location: </b>";		 
					echo $dado[$LOCATION];
					echo "<br>";
					echo "<b>SLL: </b>";		 
					echo $dado[$SLL];
					echo "<br>";
					echo "<b>IM #2: </b>";		 
					echo $dado[$IM2];
					echo "<br>";		 
                                 ?>
				</div>
                                </div>
                                </div>
                        </td>
			<td align=left style="font-size:14px"><?php echo $dado[$LPAR]; ?></td>
			<td align=left style="font-size:14px"><?php echo $dado[$FLL]; ?></td>
			<td align=left style="font-size:14px"><?php echo $dado[$IM1]; ?></td>
		        </tr>
             </tbody>
                <?php } ?>
</table>

</body>
</html>
