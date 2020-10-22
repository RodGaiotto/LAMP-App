<?php

//END OF AUTHENTICATION CODE

error_reporting( ~E_DEPRECATED & ~E_NOTICE );

define('DBHOST', 'sl-us-south-1-portal.25.dblayer.com:41969');
define('DBUSER', 'admin');
define('DBPASS', 'YVVIBOUSWCGEVYSW');
define('DBNAME', 'ptdb');

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
$dbcon = mysqli_select_db($conn, DBNAME);

if ( !$conn ) {
    die("Connection failed : " . mysqli_error());
}

if ( !$dbcon ) {
    die("Database Connection failed : " . mysqli_error());
}

$query   = "SELECT * FROM VLANDATA";
$results = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<title>Performance Trigger</title>

<head>
<meta charset="utf8">
<!--LINKS TO THE PAGE STYLE USING CSS-->
<link rel="stylesheet" href="bootstrap-3.min.css">
<script src="jquery-1.9.1.js"></script>
<link rel="stylesheet" href="jquery-ui-1.11.4.css">
<link rel="stylesheet" type="text/css" href="style/style2.css"> 
<link rel="stylesheet" href="css/reset.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="drop.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</head>

<?php $bul[10000007] = false;?>

<body id="body">
<section>
<font face="arial" size="5" color="#DF7401"><b>Performance Trigger - network: lpar</b></font>
<!--HERE BEGINS THE HTML CODE FOR THE MENU-->
<?PHP include('menu.php'); ?>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"   type="text/javascript"></script>

<div class="">
<div class="">

<form name='form1' id='form1' action='' method='post'>
<label>Location </label><br>
<select name="system" id="location-list" class="">
    <option value="">Select the LPAR</option>

        <?php
$sql = "SELECT DISTINCT V_LPAR FROM VLANDATA";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    if ($bul[$row['V_LPAR']] != true && $row['V_LPAR'] != 'V_LPAR') {
?>
               <option value="<?php
        echo $row['V_LPAR'];
?>"><?php
        echo $row['V_LPAR'];
?></option>
        <?php
        $bul[$row['V_LPAR']] = true;
    }
}
?>

    </select>
</div>
</div>
<div class="">
<form name="frmSearch" method="post" action="">
<p class="search_input">
</b>
<input type="submit" name="go" value="Search" >
</p>

<?php 

$systemout = $_POST["system"];

$sql1 = sprintf("SELECT DISTINCT VSWITCH_ID,SERV_VLAN,SUBNET FROM VLANDATA WHERE V_LPAR='%s'", $systemout);
$result3 = mysqli_query($conn,$sql1);

?>

<script src="jquery-ui-1.10.3.js"></script>

</form>
<center><font face="arial" size="4" color="#DF7401"><b><?php echo $systemout; ?></b></font></center>
<table id="usage">
          <thead>
        <tr>
<th><span>Available VSWITCHs</span></th>
<th><span>Respective VLAN</span></th>
<th><span>Respective Subnet</span></th>
        </tr>
      </thead>
    <tbody>
        <?php
                while($row3 = mysqli_fetch_array($result3)) {
        ?>
        <tr>
<td><?php echo $row3["VSWITCH_ID"]; ?></td>
<td><?php echo $row3["SERV_VLAN"]; ?></td>
<td><?php echo $row3["SUBNET"]; ?></td>
                </tr>
   <?php
                }
   ?>
   <tbody>
  </table>
</body>
</html>
