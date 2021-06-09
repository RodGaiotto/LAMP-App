<?php
$con=mysqli_connect("sl-us-south-1-portal.8.dblayer.com:40725","admin","NBZAZABSRGEAMUDM","msdb");
//Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }	
	
$sql=sprintf("SELECT * FROM main");
			
$result=mysqli_query($con,$sql);
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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="Lato.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="drop.css">
<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">	
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    
}
/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('wallpaper211.jpg');
    min-height: 35%;
}
/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("wallpaper111.jpg");
    min-height: 100px;
}
/* Third image (Contact) */
.bgimg-3 {
    background-image: url("wallpaper211.jpg");
    min-height: 100px;
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<style type="text/css" class="init">
	
	tfoot input {
		width: 100%;
		padding: 3px;
		box-sizing: border-box;
	}
	</style>	
<body>

<button onclick="myFunction4()">Clear Results</button>
<table id="demo1" cellpadding="0" cellspacing="0" style="width:100%" style="font-size:13px">
		    <thead>   
            <tr>
                        <th align=left>VCS(AC2)</th>
                        <th align=left>IM</th>
		<th align=left>IM Backup</th>
                        <th align=left>FLL</th>
		<th align=left>SLL</th>
             </tr>
             </thead>
                <?php while($dado = mysqli_fetch_array($result)) {?>
            
            <tbody>
            <tr style="display: none">
			<td align=left style="font-size:14px"><?php echo $dado[$VCSAC2]; ?></td>
			<td align=left style="font-size:14px"><?php echo $dado[$IM1]; ?></td>
			<td align=left style="font-size:14px"><?php echo $dado[$IM2]; ?></td>
			<td align=left style="font-size:14px"><?php echo $dado[$FLL]; ?></td>
		  	<td align=left style="font-size:14px"><?php echo $dado[$SLL]; ?></td>
		        </tr>
             </tbody>
                <?php } ?>
                </table> <br><br>



</script>
<!-- TABLE FILTER -->
<script src="tablefilter.js"></script>
<script src="test-alternate-rows.js"></script>
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
	<script>
function myFunction4() {
    location.reload();
}
</script>
<script data-config>
//If setting here, it will ignore the MAIN JS.
//It is possible to customize many tables building new
//like this, for example demo2, demo3, with different attributes...
	var tf = new TableFilter('demo1', {
        base_path: 'tablefilter/',
        single_filter: true,
    });
    tf.init();
</script>

</html>
