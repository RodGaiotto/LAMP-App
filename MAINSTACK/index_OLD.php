<!DOCTYPE html>
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
<title>IBM - MainStack</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="Lato.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="drop.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
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
    background-image: url('wallpaper21.jpg');
    min-height: 35%;
}
/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("wallpaper11.jpg");
    min-height: 200px;
}
/* Third image (Contact) */
.bgimg-3 {
    background-image: url("wallpaper21.jpg");
    min-height: 200px;
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
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small">SEARCH</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small">REPORTS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small">FEEDBACK</a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">SEARCH</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">REPORTS</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">FEEDBACK</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><img src="ibm2_small2.png" style="top:50px;"> <span class="w3-hide-small">MAINSTACK</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">SEARCH</h3>
  <p>The following servers compose the IBM internal Linux on Z farm.
	<br><b>CLICK</b> in the server <b>Full Name</b> for additional details.</p><br>

    <!-- enabling filters <table id="demo" cellpadding="0" cellspacing="0" style="width:100%"> -->	
    <table cellpadding="0" cellspacing="0" style="width:100%" style="font-size:13px">
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
                </table> <br><br>

<div class="w3-row w3-center w3-dark-grey w3-padding-small">
  <div class="w3-quarter w3-section">
    <span class="w3-large">80</span><br>
    z/VM LPARs
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-large">1124</span><br>
    z/Linux Servers
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-large">5040</span><br>
    Users
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-large">30</span><br>
    Squads
  </div>
</div>

<br><br><br><br><br>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-black w3-wide">REPORTS</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">REPORTS</h3>
  <p class="w3-center"><em>Reports Generation</em></p><br><br><br><br><br><br><br><br><br><br>


<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-black w3-wide">FEEDBACK</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">FEEDBACK AND SUPPORT</h3>
  <p class="w3-center"><em>Please, use the form if you want to give a feedback, request for improvments request, or ask for support:</em></p>


    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
      </div>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>
 
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

</body>
</html>
