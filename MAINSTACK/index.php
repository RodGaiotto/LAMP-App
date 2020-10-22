<!DOCTYPE html>
<?php
include ("connector.php");
$consult = sprintf("SELECT * FROM main WHERE STATUS NOT IN ('sunset')");
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

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a style="color: #26343f" href="#home" class="w3-bar-item w3-button">HOME</a>
    <a style="color: #26343f" href="#report" class="w3-bar-item w3-button w3-hide-small">REPORTS</a>
    <!-- <a style="color: #26343f" href="#report" class="w3-bar-item w3-button w3-hide-small">SCCD/TSRM QUEUES</a>-->
    <!--<a style="color: #26343f" href="#report2" class="w3-bar-item w3-button w3-hide-small">QUEUES IN BATCH</a>-->
    <!--<a style="color: #26343f" href="#report3" class="w3-bar-item w3-button w3-hide-small">SERVERS IN BATCH</a>-->	  
    <a style="color: #26343f" href="#contact" class="w3-bar-item w3-button w3-hide-small">FEEDBACK</a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#report" class="w3-bar-item w3-button" onclick="toggleFunction()">REPORTS</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">FEEDBACK</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide"><img src="ibm2_small2.png" style="top:50px;"> <span class="w3-hide-small">MAINSTACK</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
	<h4>The following servers compose the IBM internal Linux on Z farm.</h4>
	
	<div id="main">
<button class="accordion1">Basic Instructions</button>
	<div class="panel">
	
	<b>#0-</b> To search, type the criteria and press <b>ENTER</b><br>
	<b>#1-</b> Use the character <b>=</b> to locate exact names, e.g. <b>=LNXVM1</b><br>
	<b>#2-</b><b>CLICK</b> in the server <b>Server Name</b> for additional details.<br>

	</div>
</div>
	<!--<b>NOTES:</b>-->
<br>
    <button onclick="myFunction3()">Clear Results</button><br>
	Type in the field and press <b>ENTER.</b><br>
    <table id="demo" cellpadding="0" cellspacing="0" style="width:100%" style="font-size:13px">
    <!--<table cellpadding="0" cellspacing="0" style="width:100%" style="font-size:13px"> -->
    <!--<table id="example" class="display" style="width:100%" style="font-size:13px"> -->	
		    <thead>   
            <tr>
                        <th align=left>VCS</th>
                        <th align=left>Server Name</th>
			<th align=left>LPAR</th>
                        <th align=left>First Line Leader</th>
			<th align=left>Iteration Manager</th>
             </tr>
             </thead>
                <?php while($dado = $con->fetch_array()){?>
            
            <tbody>
	    <tr style="display: none">	    
			<td align=left><?php echo $dado[$VCSAC2]; ?></td>
			<!-- POPUP BOX -->
                        <td align=left style="font-size:14px">
				<b>
                                <a id="sysname" class="button" href="#popup<?php echo $dado[$HOSTF] ?>" style="color:#0B0B61;" >
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
			<td align=left style="font-size:14px"><?php echo $dado[$FLL]; ?></td>
			<td align=left style="font-size:14px"><?php echo $dado[$IM1]; ?></td>
		        </tr>
             </tbody>
                <?php } ?>
                </table> <br><br>

<br><br><br>

<p style="color:white" id="report">AncorText</p><br><br>
<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
<span class="w3-xxlarge w3-text-black w3-wide">REPORTS</span>	  
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64">

<div id="main">
<button class="accordion">1-QUEUES PER LPAR</button>
	<div class="panel">
	
<h4 id="report1"><b>1-Queues per LPAR</b></h4>
<h5><b>Please select de LPARs:</b></h5> 
<iframe src="report1.php" height="700" width="100%" style="border:none;" scrolling="yes"></iframe>
<br><br>

	</div>

<button class="accordion">2-QUEUES IN BATCH</button>
	<div class="panel">

<h4 id="report2"><b>2-Queues in Batch</b></h4>
<h5><b>Search for VCS, using a Queues List</b></h5>
<iframe src="report2.php" height="700" width="100%" style="border:none;" scrolling="yes"></iframe>
<br><br>

	</div>

<button class="accordion">3-SERVERS IN BATCH</button>
	<div class="panel">

<h4 id="report3"><b>3-Servers in Batch</b></h4>
<h5><b>Search Servers in Batch, using a List</b></h5>
<iframe src="report3.php" height="700" width="100%" style="border:none;" scrolling="yes"></iframe>
<br><br>
	
	</div>
	
<button class="accordion">4-SERVERS INFO FOR CHANGES</button>
	<div class="panel">

<h4 id="report4"><b>4-Servers Information for Changes</b></h4>
<h5><b>Search Servers in Batch, using a List</b></h5>
<iframe src="report4.php" height="700" width="100%" style="border:none;" scrolling="yes"></iframe>
<br><br>
	
	</div>	
	
<button class="accordion">5-VCS, IM AND SLL LIST</button>
	<div class="panel">

<h4 id="report5"><b>5-VCS, IMs and SLLs list</b></h4>
<h5><b>Search Queues in Batch, using a List</b></h5>
<iframe src="report5.php" height="700" width="100%" style="border:none;" scrolling="yes"></iframe>
<br><br>
	
	</div>		
	
<button class="accordion">6-SUB ACCOUNTS</button>
	<div class="panel">

<h4 id="report5"><b>6-SUB ACCOUNTS</b></h4>
<h5><b>Search Sub Accounts, as in the Home</b></h5>
<iframe src="report6.php" height="700" width="100%" style="border:none;" scrolling="yes"></iframe>
<br><br>
	
	</div>		
	
	</div>

	<br><br>

	
	<br><br><br><br><br><br><br><br><br><br>

<p style="color:white" id="contact">AncorText</p><br><br>
<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-black w3-wide">FEEDBACK</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64">
  <!--<p class="w3-center"><em>Please, use the form if you want to give a feedback, request for improvments request, or ask for support:</em></p>-->
<p class="w3-center"><em>The Submission form is unavailable, please contact <b>rgaiotto@br.ibm.com</b> or <b>anafs@br.ibm.com</b></em></p>

 <center><a href="https://garage101.w3ibm.mybluemix.net"><img width="15%" alt="Powered by Garage101" src="dino.jpg"></center><br>
 <center><i>This Web application is Powered by Garage101</i></center></a>


<!--
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
      </div>
      <form method="post" name="myemailform" action="/rest/v2/emails">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
        <button class="w3-button w3-black w3-right w3-section" name="submit">
          SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
-->
 
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
    
    //var tf = new TableFilter('demo4', {
    //    base_path: 'tablefilter/',
    //    col_widths: ['100px', '190px', '100px', '190px', '190px', '100px']
    //});
    //tf.init();
    
    
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

