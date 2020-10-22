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
  <title>Performance Trigger v1.0</title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" href="css/style.css">
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</head>

<body>

<!--START MENU CODING -->
<br>
<center>
<nav id="main_nav">
<ul>
<li><a href="index.php">home</a></li>
<li><a href="">location</a>
	<ul>
	<li><a href="">US</a>
		<ul>
		<li><a href="index.php?location=Poughkeepsie">Pok</a></li>
		<li><a href="index.php?location=Boulder">Boulder</a></li>           
		</ul>
	</ul>
</li>
<li><a href="">status</a>
	<ul>
	<li><a href="index.php?status=Open">Open</a>
		<ul>
		<li><a href="index.php?status=Requires Approval">Approval Required</a></li>
		</ul>
	</li>
	<li><a href="index.php?status=Closed">Closed</a></li>	
	</ul>
</li>
<li><a href="about.php">about</a></li>
</ul>
</nav>
</center>
<br><br><br>
<!--END MENU CODING -->

  <section>
  <h1>PerformanceTrigger v1.0</h1>
  <div style="overflow-y:auto;">
      <!--<table id="demo1" cellpadding="0" cellspacing="0" border="0">-->
      <table id="myTable" cellpadding="0" cellspacing="0" border="0">
          <thead>
        <tr class="header">
	<th>Location</th>
	<th>Zone</th>
	<th>CPU</th>
	<th>CPU Utilization</th>
	<th>LPAR</th>
	<th>LPAR Utilization</th>
	<th>Memory</th>
	<th>Mem Utilization</th>
	<th>Free Storage</th>
	<th>Allocated SAN</th>
	<th>Status</th>
	
        </tr>
      </thead>
      <tbody>
      	<?php while($dado = $conn->fetch_array()): ?>
	 <tr>
	<td><?php echo $dado[$LOCATION]; ?></td>
	<td><?php echo $dado[$ZONE]; ?></td>
	<td><?php echo $dado[$CPU]; ?></td>
	<td><?php echo $dado[$CPUUTIL]; ?>%</td>
		<?php
                if ($dado[$STATUS] == 'Closed'){
                echo '<td style="color:#FA5858;font-weight: bold;">';
                echo $dado[$LPAR];
		}
		elseif ($dado[$STATUS] == 'Open'){
                echo '<td style="color:#D0FA58;font-weight: bold;">';
                echo $dado[$LPAR];
		} 
		else {
		echo '<td style="color:#FAAC58;font-weight: bold;">';
                echo $dado[$LPAR];	
        	}
		?>
		</td>
	<td><?php echo $dado[$LPARUTIL]; ?>%</td>
	<td><?php echo $dado[$MEM]; ?> GB</td>
	<td><?php echo $dado[$MEMUTIL]; ?>%</td>
	<td><?php echo $dado[$AVAILSTOR]; ?> GB</td>
	<td><?php echo $dado[$SANALLOC]; ?> GB</td>
	<?php
                if ($dado[$STATUS] == 'Closed'){
                echo '<td style="color:#FA5858;">';
                echo $dado[$STATUS];
		}
		elseif ($dado[$STATUS] == 'Open'){
                echo '<td style="color:#D0FA58;">';
                echo $dado[$STATUS];
		} 
		else {
		echo '<td style="color:#FAAC58;">';
                echo $dado[$STATUS];	
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
	col_3: 'select',
	col_4: 'select',
	col_5: 'select',
	col_6: 'select',
	col_7: 'select',
	col_8: 'select',
	col_9: 'select',
	col_10: 'select',
	col_11: 'select',
        state: true,
        msg_filter: 'Filtering...'
    };
    var tf = new TableFilter('myTable', filtersConfig);
    tf.init();
</script>


</body>
</html>
