<?php
//HERE LAYS THE CONNECTOR BETWEEN THE PAGE AND THE DATABASE
include("class/connector.php"); 

$today = date('Y-m-d');
$location = "";
$status = "";
$consulta = "";



//if(isset) check if variable is set and if is not null (if inicialized)	
//RDATE = '%s', MEANS THAT THE OUTPUT WILL BE READ AS "STRING"
//$_GET, capture what is passed by certain variable
//$consulta can be SELECT * FROM SRSLOAD WHERE RDATE = 2017-06-27 AND SUB_ACCOUNT CANADA
//or $consulta can be SELECT * FROM SRSLOAD WHERE RDATE = 2017-06-27
//that's what is expected to have in the $consulta variable.
if(isset($_GET['location'])) {
	$location = $_GET['location'];
	//$consulta = sprintf("SELECT * FROM SRSLOAD WHERE RDATE = '%s' AND SUB_ACCOUNT = '%s'", $today, $location);
	//HERE BELOW IS THE PROPER RULE FOR WHEN WE HAVE LEGACY SYSTEMS BOARDED, IT IS NEEDED TO ADD COLUMN PROJ
	//TO SEGREGATE LEGACY FROM ECM
	$consulta = sprintf("SELECT * FROM PERFTRIG WHERE LOCATION = '%s'", $location);
	//$consulta = sprintf("SELECT * FROM PERFTRIG WHERE LOCATION = '%s' AND DATETIME >= ( CURDATE() - INTERVAL 0 DAY) ORDER BY DATETIME DESC", $location);
	//$consulta = sprintf("SELECT * FROM PERFTRIG");
} elseif (isset($_GET['status'])) {
	$status = $_GET['status'];
	//$consulta = sprintf("SELECT * FROM SRSLOAD WHERE RDATE = '%s'", $today);
        //$consulta = sprintf("SELECT * FROM SRSLOAD ORDER BY RDATE DESC");
	// ( CURDATE() - INTERVAL 1 DAY) WILL SHOW CURRENT DAY + THE LAST DAY BASED IN THE RDATE
	//$consulta = sprintf("SELECT * FROM PERFTRIG WHERE DATETIME >= ( CURDATE() - INTERVAL 0 DAY) ORDER BY DATETIME DESC");
	$consulta = sprintf("SELECT * FROM PERFTRIG WHERE STATUS = '%s'", $status);
} else {
	//$consulta = sprintf("SELECT * FROM SRSLOAD WHERE RDATE = '%s'", $today);
        //$consulta = sprintf("SELECT * FROM SRSLOAD ORDER BY RDATE DESC");
	// ( CURDATE() - INTERVAL 1 DAY) WILL SHOW CURRENT DAY + THE LAST DAY BASED IN THE RDATE
	//$consulta = sprintf("SELECT * FROM PERFTRIG WHERE DATETIME >= ( CURDATE() - INTERVAL 0 DAY) ORDER BY DATETIME DESC");
	$consulta = "SELECT * FROM PERFTRIG";
	}
	


$conn = $mysqli -> query($consulta) or die($mysqli -> error);

//$con variable will be used to fill up the HTML table bellow using while
//$mysqli -> query($consulta) is a SELECT QUERY in que DataBase
//$con = $mysqli -> query($consulta) or die($mysqli -> error);

//THESE VARIABLE WILL BE CALLED IN THE TABLE
$RDATE = "RDATE";
$LOCATION = "LOCATION"; 
$ZONE = "ZONE";
$CPU = "CPU";
$MODEL = "MODEL";
$CPUUTIL = "CPUUTIL";
$LPAR = "LPAR";
$LPARUTIL = "LPARUTIL";
$MEM = "MEM";
$MEMUTIL = "MEMUTIL";
$AVAILSTOR = "AVAILSTOR";
$SANALLOC = "SANALLOC";
$CLASS = "CLASS";
$HIAVAPAIR = "HIAVAPAIR";
$SSICLUST = "SSICLUST";
$SPECFLAG = "SPECFLAG";
$STATUS = "STATUS";
$COMMENTS = "COMMENTS";

?>

<html lang="en">
<head>
  <title>Performance Trigger</title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" href="css/style.css">
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</head>

<body>
<font face="arial" size="5" color="#DF7401"><b>Performance Trigger</b></font>
<!--START MENU CODING -->
<?php include('menu.php'); ?>
<!--END MENU CODING -->

  <section>
<br><br>
<center><h4 style="font-weight: bold">Performance Trigger - 2018</h4><br>
<br>
<h4>Issues or concerns, please let us know. <br><br>
<h5 style="font-weight: bold">Development Team:</h5>
Rodrigo Gaiotto - rgaiotto@br.ibm.com<br>Luiz Moreira - luizmore@br.ibm.com
<br>Diego Pigossi - diegop@br.ibm.com<br>Luis Chinelatto - luisch@br.ibm.com<br>Ana Senatore - anafs@br.ibm.com</h4></center><br><br>
<center><h4>This Web application is Powered by Garage101</h4></center>
<center><h4>Interface "HighEnds" developed by rgaiotto@br.ibm.com</h4><br>
<img style="width:10%" src="dino.jpg">
</center>

</body>
</html>
