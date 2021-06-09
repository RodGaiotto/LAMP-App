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
$LPAR = "LPAR";
$LOCATION = "LOCATION";
$ZONE = "ZONE";
$ACTIVE_CP = "ACTIVE_CP";
$LNX_COUNT = "LNX_COUNT";
$FREE_LINUX = "FREE_LINUX";
$FREE_ICO = "FREE_ICO";
$AVAILSTOR = "AVAILSTOR";
$SANALLOC = "SANALLOC";
$DASD_USED = "DASD_USED";
$DASD_ASSIGNED = "DASD_ASSIGNED";
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

</head>

<body>

<font face="arial" size="5" color="#DF7401"><b>Performance Trigger - storage</b></font>
<?PHP include('menu.php'); ?>

<section>
  <!-- RESPONSIVE TABLE <div style="overflow-y:auto;">-->
  <div>
      <!--<table id="demo1" cellpadding="0" cellspacing="0" border="0">-->
      <br>
      <center>
      <input type="button" class="mybutton" onclick="tableToExcel('sectable', 'W3C Example Table')" value="Export to Excel">
      </center>
      <br>
      <table id="sectable" cellpadding="0" cellspacing="0" border="0">
          <thead>
        <tr class="header">
		<th>LPAR</th>
		<th>Location</th>
		<th>Zone</th>
		<th>Active CP</th>
		<th>Linux Count</th>
		<th>Free Linux</th>
    <th>Free ICO</th>
    <th>Avail Stor</th>
    <th>SAN Alloc</th>
    <th>DASD Used</th>
    <th>DASD Assigned</th>
        </tr>
      </thead>
      <tbody>
      	<?php while($dado = $conn->fetch_array()): ?>
	 <tr>
		<td><?php echo $dado[$LPAR]; ?></td>
		<td><?php echo $dado[$LOCATION]; ?></td>
		<td><?php echo $dado[$ZONE]; ?></td>
  	<td><?php echo $dado[$ACTIVE_CP]; ?></td>
		<td><?php echo $dado[$LNX_COUNT]; ?></td>
  	<td><?php echo $dado[$FREE_LINUX]; ?></td>
    <td><?php echo $dado[$FREE_ICO]; ?></td>
    <td><?php echo $dado[$AVAILSTOR]; ?></td>
    <td><?php echo $dado[$SANALLOC]; ?></td>
    <td><?php echo $dado[$DASD_USED]; ?></td>
    <td><?php echo $dado[$DASD_ASSIGNED]; ?></td>
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
  col_3: 'select',
  col_4: 'select',
  col_5: 'select',
  col_6: 'select',
  col_7: 'select',
  col_8: 'select',
  col_9: 'select',
  col_10: 'select',
        state: true,	
	
        msg_filter: 'Filtering...'
    };
    var tf = new TableFilter('sectable', filtersConfig);
    tf.init();
</script>


</body>
</html>
