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
$SPECTRE = "SPECTRE";
$LPARUTIL = "LPARUTIL";
$MEMORY = "MEMORY";
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
  <link rel="stylesheet" href="drop.css">
  <script src="tableToExcel.js"></script>
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

<style>
</style>

</head>

<body>

<font face="arial" size="5" color="#DF7401"><b>Performance Trigger</b></font>
<!--START MENU CODING -->
<?php include('menu.php'); ?>
<!--END MENU CODING -->

  <section>
  <!-- RESPONSIVE TABLE <div style="overflow-y:auto;">-->
  <div>
      <!--<table id="myTable" cellpadding="0" cellspacing="0" border="0">-->
      <br>
      <center>
	<input type="button" class="mybutton" onclick="tableToExcel('myTable', 'W3C Example Table')" value="Export to Excel">
      </center>	
      <br>
      <table id="myTable" cellpadding="0" cellspacing="0" border="0">
          <thead>
        <tr class="header">
	<th>Location</th>
	<th>Zone</th>
	<th>CPU Util%</th>
	<th>LPAR</th>
	<th>Spectre</th>
	<th>LPAR Util%</th>
	<th>Memory</th>
	<th>Mem Util%</th>
	<th>Free Stor</th>
	<th>Allocated SAN</th>
	<th>Status</th>
	
        </tr>
      </thead>
      <tbody>
      	<?php while($dado = $conn->fetch_array()): ?>
	 <tr>
	<td><?php echo $dado[$LOCATION]; ?></td>
	<td><?php echo $dado[$ZONE]; ?></td>
	<td><?php echo $dado[$CPUUTIL]; ?>%</td>
				<!--HERE LAYS THE POP-UP, LPAR COLOR ACCORDING CONDITIONS-->
				<td>
				<b>
                                <a id="sysname" class="button" href="#popup<?php echo $dado[$LPAR] ?>">
                                <?php echo $dado[$LPAR]; ?>
                                </a>
				</b>	
                                <div id="popup<?php echo $dado[$LPAR] ?>" class="overlay">
                                <div class="popup" style="font-weight: bold;">
                                <b><?php echo $dado[$LPAR]; ?></b><br><br>
                                <a class="close" href="#">&times;</a>
                                <div class="content">
                                <?php
					echo "<b>CPU: </b>";
				        echo $dado[$CPU];
					echo "<br><br>";
					echo "<b>Model: </b>";
				        echo $dado[$MODEL];
				        echo "<br><br>";
					echo "<b>Class: </b>";		 
					echo $dado[$CLASS];
					echo "<br><br>";
					echo "<b>High Avail. Pair: </b>";		 
					echo $dado[$HIAVAPAIR];
					echo "<br><br>";
					echo "<b>SSI Cluster: </b>";		 
					echo $dado[$SSICLUST];
					echo "<br><br>";		 
					echo "<b>Special Flag: </b>";		 
					echo $dado[$SPECFLAG];
					echo "<br>";
                                 ?>
				</div>
                                </div>
                                </div>
				</td>
	<td><?php echo $dado[$SPECTRE]; ?></td>
	<td><?php echo $dado[$LPARUTIL]; ?>%</td>
	<td><?php echo $dado[$MEMORY]; ?> GB</td>
	<td><?php echo $dado[$MEMUTIL]; ?>%</td>
	<td><?php echo $dado[$AVAILSTOR]; ?> GB</td>
	<td><?php echo $dado[$SANALLOC]; ?> GB</td>
	<?php
	        if ($dado[$ZONE] == 'Legacy' || $dado[$ZONE] == 'Dublin' || $dado[$ZONE] == 'S390CC'){
		echo '<td style="background-color:white;">';
		$STATUS = "N/A";
                echo $STATUS; 
		}
                elseif ($dado[$SPECFLAG] == 'Y'){
		echo '<td style="background-color:#FAAC58;">';
		$STATUS = "Approval Required";
                echo $STATUS; 
		}
		elseif ($dado[LPAR] == 'LNXVM7'){
		echo '<td style="background-color:#FA5858;">';
		$STATUS = "Closed";
                echo $STATUS;
		}
		elseif ($dado[$CPUUTIL] > 50 || $dado[$MEMUTIL] > 80 ){
		echo '<td style="background-color:#FA5858;">';
		$STATUS = "Closed";
                echo $STATUS;
		} 
		else {
		echo '<td style="background-color:#D0FA58;">';
               	$STATUS = "Opened";
                echo $STATUS;
        	}
		?>
		</td>
        <!--here below, example on how to add complement text to the column-->
	<!--<td><?php //echo $dado[$PROCUTILI]; ?>%</td>-->
        </tr>
	<?php endwhile; ?>
      </tbody>
    </table>
  </div>
</section>
</tr>
</table>

</script>
<!-- TABLE FILTER -->
<script src="tablefilter.js"></script>
<script src="test-alternate-rows.js"></script>

<!-- DROP BOX -->
<script src="script.js"></script>

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
	col_0: 'select',
        col_1: 'select',
        col_2: 'select',
	col_4: 'select',
	col_5: 'select',
	col_6: 'select',
	col_7: 'select',
	col_8: 'select',
	col_9: 'select',
	col_10: 'select',
	col_11: 'select',
	col_12: 'select',
        state: true,	
	
        msg_filter: 'Filtering...'
    };
    var tf = new TableFilter('myTable', filtersConfig);
    tf.init();
</script>


</body>
</html>
