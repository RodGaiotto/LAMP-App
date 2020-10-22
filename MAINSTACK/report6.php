<!DOCTYPE html>
<?php

$conn=mysqli_connect("sl-us-south-1-portal.8.dblayer.com:40725","admin","NBZAZABSRGEAMUDM","msdb")
or die ('Cannot connect to db');

$sql = sprintf("SELECT * FROM main");

$result = mysqli_query($conn,$sql);

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
$SUBACCT = "SUBACCT";
	
?>

<html>
<title>IBM - MainStack</title>
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
    min-height: 40%;
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
#main {
    transition: margin-left .5s;
    padding: 16px;
    color: #26343f;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#img1 {
    width:100%;
    height:100%;
}
.accordion {
    background-color: #26343f;
    color: white;
    cursor: pointer;
    padding: 10px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    font-weight: bold;
}
.active, .accordion:hover {
    background-color: #aaa; 
}
.panel {
    padding: 0 15px;
    display: none;
    background-color: white;
    overflow: hidden;
}
.accordion1 {
    background-color: #26343f;
    color: white;
    cursor: pointer;
    padding: 10px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    font-weight: bold;
}
.active1, .accordion1:hover {
    background-color: #aaa; 
}
.panel1 {
    padding: 0 15px;
    display: none;
    background-color: white;
    overflow: hidden;
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

	<div id="main">
</div>
	<!--<b>NOTES:</b>-->
<br>
    <button onclick="myFunction3()">Clear Results</button><br>
	Type in the field and press <b>ENTER.</b><br>
    <table id="demo4" cellpadding="0" cellspacing="0" style="width:100%" style="font-size:12px">
    <!--<table cellpadding="0" cellspacing="0" style="width:100%" style="font-size:13px"> -->
    <!--<table id="example" class="display" style="width:100%" style="font-size:13px"> -->	
		    <thead>   
            <tr>
                        <th align=left>VCS(AC2)</th>
                        <th align=left>Server Name</th>
			<th align=left>LPAR</th>
                        <th align=left>SubAccount</th>
			<th align=left>Iteration Manager</th>
             </tr>
             </thead>
                <?php while($dado = mysqli_fetch_array($result)){?>
            
            <tbody>
	    <tr style="display: none">	    
			<td align=left><?php echo $dado[$VCSAC2]; ?></td>
			<!-- POPUP BOX -->
                        <td align=left style="font-size:12px">
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
					echo "<b>SCCD Queue: </b>";		 
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
					echo "<b><mark>SLL: </mark></b>";		 
					echo "<b><mark>".$dado[$SLL]."</mark></b>";
					echo "<br>";
					echo "<b>IM #2: </b>";		 
					echo $dado[$IM2];
					echo "<br>";		 
                                 ?>
				</div>
                                </div>
                                </div>
                        </td>
			<td align=center style="font-size:14px"><?php echo $dado[$LPAR]; ?></td>
			<td align=left style="font-size:14px"><?php echo $dado[$SUBACCT]; ?></td>
			<td align=left style="font-size:14px"><?php echo $dado[$IM1]; ?></td>
		        </tr>
             </tbody>
                <?php } ?>
                </table> <br><br>

<br><br><br>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64">

	
	</div>

	<br><br>
 
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
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
function myFunction3() {
    location.reload();
}
</script>
<script data-config>
//If setting here, it will ignore the MAIN JS.
//It is possible to customize many tables building new
//like this, for example demo2, demo3, with different attributes...
	
var filtersConfig = {
        base_path: '/',
        auto_filter: {
            delay: 1100 //milliseconds
        },
        filters_row_index: 1,
        state: true,
        msg_filter: 'Filtering...'
    };
    //var tf = new TableFilter('demo1', filtersConfig);
    //tf.init();
    
    var tf = new TableFilter('demo4', {
        base_path: 'tablefilter/',
        col_widths: ['190px', '210px', '120px', '110px', '180px']
    });
    tf.init();
    
    
</script>



<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
<script>
var acc = document.getElementsByClassName("accordion1");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
<!-- THIS ARE THE SCRIPTS REQUIRED TO EXPORT TABLE demo TO XLS-->
<script src="jquery.min.js"></script>
<script type="text/javascript" src="tableExport.js"></script>
<script type="text/javascript" src="jquery.base64.js"></script>
<script type="text/javascript" src="html2canvas.js"></script>
<script type="text/javascript" src="sprintf.js"></script>
<script type="text/javascript" src="jspdf.js"></script>
<script type="text/javascript" src="base64.js"></script>
<script type="text/javaScript">	
		$(document).ready(function(){		
		});
</script>

</body>
</html>
