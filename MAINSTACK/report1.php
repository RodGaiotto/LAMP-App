<html>
<title>IBM - MainStack</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="Lato.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="drop.css">
<link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">
<script src="tableToExcel.js"></script>
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
td {
    font-size: 12px;
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

<form method="post">
<table style="width:100%" style='font-size: 12px'>
<tr>
<td><input type="checkbox" onclick="toggle(this);" />SELECT ALL<br /></td>
</tr>
<tr>	  
<td><input type="checkbox" name="lparn[]" value="LNXVM0" /> LNXVM0</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM1" /> LNXVM1</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM2" /> LNXVM2</td>
<!--<td><input type="checkbox" name="lparn[]" value="LNXVM3" /> LNXVM3</td>-->
<td><input type="checkbox" name="lparn[]" value="LNXVM4" /> LNXVM4</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM5" /> LNXVM5</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM6" /> LNXVM6</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM7" /> LNXVM7</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM8" /> LNXVM8</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM9" /> LNXVM9</td>
</tr>	
<tr>	  	  
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM10" /> LNXVM10</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM11" /> LNXVM11</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM12" /> LNXVM12</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM13" /> LNXVM13</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM14" /> LNXVM14</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM15" /> LNXVM15</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM16" /> LNXVM16</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM17" /> LNXVM17</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM18" /> LNXVM18</td>
</tr>
<tr>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM19" /> LNXVM19</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM20" /> LNXVM20</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM21" /> LNXVM21</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM22" /> LNXVM22</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM23" /> LNXVM23</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM24" /> LNXVM24</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM25" /> LNXVM25</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM26" /> LNXVM26</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM27" /> LNXVM27</td>
</tr>
<tr>
<!--<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM28" /> LNXVM28</td>-->
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM29" /> LNXVM29</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM30" /> LNXVM30</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM31" /> LNXVM31</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM32" /> LNXVM32</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM33" /> LNXVM33</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM34" /> LNXVM34</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM35" /> LNXVM35</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM36" /> LNXVM36</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM37" /> LNXVM37</td>
</tr>
<tr>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM38" /> LNXVM38</td>
<!--<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM39" /> LNXVM39</td>-->
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM40" /> LNXVM40</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM41" /> LNXVM41</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM42" /> LNXVM42</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM43" /> LNXVM43</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM44" /> LNXVM44</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM45" /> LNXVM45</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM46" /> LNXVM46</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM47" /> LNXVM47</td>
</tr>
<tr>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM48" /> LNXVM48</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM49" /> LNXVM49</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM50" /> LNXVM50</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM51" /> LNXVM51</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM52" /> LNXVM52</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM53" /> LNXVM53</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM54" /> LNXVM54</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM55" /> LNXVM55</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM56" /> LNXVM56</td>
</tr>
<tr>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM57" /> LNXVM57</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM58" /> LNXVM58</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM59" /> LNXVM59</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM60" /> LNXVM60</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM61" /> LNXVM61</td>
<td style='font-size: 12px' ><input type="checkbox" name="lparn[]" value="LNXVM62" /> LNXVM62</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM63" /> LNXVM63</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM64" /> LNXVM64</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM65" /> LNXVM65</td>
</tr>
<tr>	
<td><input type="checkbox" name="lparn[]" value="LNXVM66" /> LNXVM66</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM67" /> LNXVM67</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM68" /> LNXVM68</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM69" /> LNXVM69</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM70" /> LNXVM70</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM71" /> LNXVM71</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM72" /> LNXVM72</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM73" /> LNXVM73</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM74" /> LNXVM74</td>
</tr>
<tr>	
<td><input type="checkbox" name="lparn[]" value="LNXVM75" /> LNXVM75</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM76" /> LNXVM76</td>
<!--<td><input type="checkbox" name="lparn[]" value="LNXVM77" /> LNXVM77</td>-->
<!--<td><input type="checkbox" name="lparn[]" value="LNXVM78" /> LNXVM78</td>-->
<td><input type="checkbox" name="lparn[]" value="LNXVM79" /> LNXVM79</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM80" /> LNXVM80</td>
<td><input type="checkbox" name="lparn[]" value="LNXBHPD1" /> LNXBHPD1</td>
<td><input type="checkbox" name="lparn[]" value="LNXBHDV1" /> LNXBHDV1</td>
<td><input type="checkbox" name="lparn[]" value="LNXBHPD2" /> LNXBHPD2</td>
<td><input type="checkbox" name="lparn[]" value="LNXBHQAA" /> LNXBHQAA</td>
<td><input type="checkbox" name="lparn[]" value="LNXBHSB1" /> LNXBHSB1</td>
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="LNXBHSB2" /> LNXBHSB2</td>
<td><input type="checkbox" name="lparn[]" value="GDLVM7" /> GDLVM7</td>
<td><input type="checkbox" name="lparn[]" value="TPFVM1" /> TPFVM1</td>
<td><input type="checkbox" name="lparn[]" value="NATIVE" /> NATIVE</td>
<td><input type="checkbox" name="lparn[]" value="GDLVME" /> GDLVME</td>
<td><input type="checkbox" name="lparn[]" value="LINUXUSF" /> LINUXUSF</td>
<td><input type="checkbox" name="lparn[]" value="LNXVM81" /> LNXVM81</td>
<td><input type="checkbox" name="lparn[]" value="LNXVMA" /> LNXVMA</td>
<td><input type="checkbox" name="lparn[]" value="LNXVMB" /> LNXVMB</td>
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="LNXVMT1" /> LNXVMT1</td>
<td><input type="checkbox" name="lparn[]" value="LNXVMT2" /> LNXVMT2</td>
<td><input type="checkbox" name="lparn[]" value="NWSVM1" /> NWSVM1</td>
<td><input type="checkbox" name="lparn[]" value="NWSVM2" /> NWSVM2</td>
<td><input type="checkbox" name="lparn[]" value="LNXVMTST" /> LNXVMTST</td>
<td><input type="checkbox" name="lparn[]" value="BLDGATE" /> BLDGATE</td>
<td><input type="checkbox" name="lparn[]" value="BLDVMB" /> BLDVMB</td>
<td><input type="checkbox" name="lparn[]" value="BLDVMKBS" /> BLDVMKBS</td>
<td><input type="checkbox" name="lparn[]" value="CARVM8" /> CARVM8</td>	
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="HRVM1" /> HRVM1</td>
<td><input type="checkbox" name="lparn[]" value="KGNVMLSC" /> KGNVMLSC</td>
<td><input type="checkbox" name="lparn[]" value="LAVM1" /> LAVM1</td>
<td><input type="checkbox" name="lparn[]" value="MAHVM1" /> MAHVM1</td>
<td><input type="checkbox" name="lparn[]" value="RCHVMX2" /> RCHVMX2</td>
<td><input type="checkbox" name="lparn[]" value="SBRYVM7" /> SBRYVM7</td>
<td><input type="checkbox" name="lparn[]" value="VMSDVM2" /> VMSDVM2</td>
<td><input type="checkbox" name="lparn[]" value="VMSDVM3" /> VMSDVM3</td>
<td><input type="checkbox" name="lparn[]" value="VMSDVM4" /> VMSDVM4</td>	
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="VMSDVM6" /> VMSDVM6</td>
<td><input type="checkbox" name="lparn[]" value="VMSDVM7" /> VMSDVM7</td>
<td><input type="checkbox" name="lparn[]" value="VMSDVM8" /> VMSDVM8</td>
<td><input type="checkbox" name="lparn[]" value="VMSDVM9" /> VMSDVM9</td>
<td><input type="checkbox" name="lparn[]" value="VMSDVMA" /> VMSDVMA</td>
<td><input type="checkbox" name="lparn[]" value="STFVM1" /> STFVM1</td>
<td><input type="checkbox" name="lparn[]" value="WWCLMVM1" /> WWCLMVM1</td>
<td><input type="checkbox" name="lparn[]" value="DUBVM25" /> DUBVM25</td>
<td><input type="checkbox" name="lparn[]" value="S390VM" /> S390VM</td>
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="TOROVM1" /> TOROVM1</td>	
<td><input type="checkbox" name="lparn[]" value="TESTCSI" /> TESTCSI</td>
<td><input type="checkbox" name="lparn[]" value="TORVMNSS" /> TORVMNSS</td>
<td><input type="checkbox" name="lparn[]" value="TORVM9" /> TORVM9</td>
<td><input type="checkbox" name="lparn[]" value="LNXVMTST" /> LNXVMTST</td>
<td><input type="checkbox" name="lparn[]" value="VA10G00" /> VA10G00</td>
<td><input type="checkbox" name="lparn[]" value="VA10G01" /> VA10G01</td>
<td><input type="checkbox" name="lparn[]" value="VA11G01" /> VA11G01</td>
<td><input type="checkbox" name="lparn[]" value="VA20G00" /> VA20G00</td>
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="VA20G01" /> VA20G01</td>
<td><input type="checkbox" name="lparn[]" value="VA11G00" /> VA11G00</td>
<td><input type="checkbox" name="lparn[]" value="VA21G00" /> VA21G00</td>
<td><input type="checkbox" name="lparn[]" value="VA21G01" /> VA21G01</td>
<td><input type="checkbox" name="lparn[]" value="VA00G00" /> VA00G00</td>
<td><input type="checkbox" name="lparn[]" value="VD10G00" /> VD10G00</td>
<td><input type="checkbox" name="lparn[]" value="VD10G01" /> VD10G01</td>
<td><input type="checkbox" name="lparn[]" value="VD11G01" /> VD11G01</td>
<td><input type="checkbox" name="lparn[]" value="VD20G00" /> VD20G00</td>
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="VD21G01" /> VD21G01</td>
<td><input type="checkbox" name="lparn[]" value="VD11G00" /> VD11G00</td>
<td><input type="checkbox" name="lparn[]" value="VD20G01" /> VD20G01</td>
<td><input type="checkbox" name="lparn[]" value="VD21G00" /> VD21G00</td>
<td><input type="checkbox" name="lparn[]" value="VA10G21" /> VA10G21</td>
<td><input type="checkbox" name="lparn[]" value="VA10G22" /> VA10G22</td>
<td><input type="checkbox" name="lparn[]" value="VA11G21" /> VA11G21</td>
<td><input type="checkbox" name="lparn[]" value="VA11G22" /> VA11G22</td>
<td><input type="checkbox" name="lparn[]" value="VA20G21" /> VA20G21</td>
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="VA20G22" /> VA20G22</td>
<td><input type="checkbox" name="lparn[]" value="VA21G21" /> VA21G21</td>
<td><input type="checkbox" name="lparn[]" value="VA21G22" /> VA21G22</td>
<td><input type="checkbox" name="lparn[]" value="VD10G21" /> VD10G21</td>
<td><input type="checkbox" name="lparn[]" value="VD10G22" /> VD10G22</td>
<td><input type="checkbox" name="lparn[]" value="VD11G21" /> VD11G21</td>
<td><input type="checkbox" name="lparn[]" value="VD11G22" /> VD11G22</td>
<td><input type="checkbox" name="lparn[]" value="VD20G21" /> VD20G21</td>
<td><input type="checkbox" name="lparn[]" value="VD20G22" /> VD20G22</td>
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="VD21G21" /> VD21G21</td>
<td><input type="checkbox" name="lparn[]" value="VD21G22" /> VD21G22</td>
<td><input type="checkbox" name="lparn[]" value="VA10G11" /> VA10G11</td>
<td><input type="checkbox" name="lparn[]" value="VA10G12" /> VA10G12</td>
<td><input type="checkbox" name="lparn[]" value="VA11G11" /> VA11G11</td>
<td><input type="checkbox" name="lparn[]" value="VA11G12" /> VA11G12</td>
<td><input type="checkbox" name="lparn[]" value="VA20G11" /> VA20G11</td>
<td><input type="checkbox" name="lparn[]" value="VA20G12" /> VA20G12</td>
<td><input type="checkbox" name="lparn[]" value="VA21G11" /> VA21G11</td>
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="VA21G12" /> VA21G12</td>
<td><input type="checkbox" name="lparn[]" value="VD10G11" /> VD10G11</td>
<td><input type="checkbox" name="lparn[]" value="VD10G12" /> VD10G12</td>
<td><input type="checkbox" name="lparn[]" value="VD11G11" /> VD11G11</td>
<td><input type="checkbox" name="lparn[]" value="VD11G12" /> VD11G12</td>
<td><input type="checkbox" name="lparn[]" value="VA10G51" /> VA10G51</td>
<td><input type="checkbox" name="lparn[]" value="VA10G52" /> VA10G52</td>
<td><input type="checkbox" name="lparn[]" value="VA11G51" /> VA11G51</td>
<td><input type="checkbox" name="lparn[]" value="VA11G52" /> VA11G52</td>
</tr>
<tr>
<td><input type="checkbox" name="lparn[]" value="VA20G51" /> VA20G51</td>
<td><input type="checkbox" name="lparn[]" value="VA20G52" /> VA20G52</td>
<td><input type="checkbox" name="lparn[]" value="VA21G51" /> VA21G51</td>
<td><input type="checkbox" name="lparn[]" value="VA21G52" /> VA21G52</td>
<td><input type="checkbox" name="lparn[]" value="VD20G11" /> VD20G11</td>
<td><input type="checkbox" name="lparn[]" value="VD20G12" /> VD20G12</td>
<td><input type="checkbox" name="lparn[]" value="VD21G11" /> VD21G11</td>
<td><input type="checkbox" name="lparn[]" value="VD21G12" /> VD21G12</td>
</tr>
</table>
           <input type="submit" name="submit" class="btn btn-info" value="Submit" />
          </form>
</body>
<?php
	
$con=mysqli_connect("127.0.0.1:3306","root","srsystem9823","msdb");
//Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }	

$result=0;
$result1=0;
	
if(isset($_POST["submit"]))
{
	if(!empty($_POST["lparn"]))
	{
		echo '<h4>You have selected the following LPARs:</4><br>';
		
		//lparn is an array received from the HTML lparn[]
		//var_dump($_POST["lparn"]); will show the content of this array/vector
		foreach($_POST["lparn"] as $lparn)
		{
			//echo '<p>'.$lparn.'</p>';
			echo $lparn.', ';
		}
		//var_dump($_POST["lparn"]);
		//converting the $_POST in an arrey!
		$submitted_array = array_keys($_POST["lparn"]);
		//$_POST["lparn"][$submitted_array[0]] is how we print the position ZERO-0 of the array!
		//echo ($_POST["lparn"][$submitted_array[2]]);
		
		$lpar1 = $_POST["lparn"][$submitted_array[0]];
		$lpar2 = $_POST["lparn"][$submitted_array[1]];
		$lpar3 = $_POST["lparn"][$submitted_array[2]];
		$lpar4 = $_POST["lparn"][$submitted_array[3]];
		$lpar5 = $_POST["lparn"][$submitted_array[4]];
		$lpar6 = $_POST["lparn"][$submitted_array[5]];
		$lpar7 = $_POST["lparn"][$submitted_array[6]];
		$lpar8 = $_POST["lparn"][$submitted_array[7]];
		$lpar9 = $_POST["lparn"][$submitted_array[8]];
		$lpar10 = $_POST["lparn"][$submitted_array[9]];
		$lpar11 = $_POST["lparn"][$submitted_array[10]];
		$lpar12 = $_POST["lparn"][$submitted_array[11]];
		$lpar13 = $_POST["lparn"][$submitted_array[12]];
		$lpar14 = $_POST["lparn"][$submitted_array[13]];
		$lpar15 = $_POST["lparn"][$submitted_array[14]];
		$lpar16 = $_POST["lparn"][$submitted_array[15]];
		$lpar17 = $_POST["lparn"][$submitted_array[16]];
		$lpar18 = $_POST["lparn"][$submitted_array[17]];
		$lpar19 = $_POST["lparn"][$submitted_array[18]];
		$lpar20 = $_POST["lparn"][$submitted_array[19]];
		$lpar21 = $_POST["lparn"][$submitted_array[20]];
		$lpar22 = $_POST["lparn"][$submitted_array[21]];
		$lpar23 = $_POST["lparn"][$submitted_array[22]];
		$lpar24 = $_POST["lparn"][$submitted_array[23]];
		$lpar25 = $_POST["lparn"][$submitted_array[24]];
		$lpar26 = $_POST["lparn"][$submitted_array[25]];
		$lpar27 = $_POST["lparn"][$submitted_array[26]];
		$lpar28 = $_POST["lparn"][$submitted_array[27]];
		$lpar29 = $_POST["lparn"][$submitted_array[28]];
		$lpar30 = $_POST["lparn"][$submitted_array[29]];
		$lpar31 = $_POST["lparn"][$submitted_array[30]];
		$lpar32 = $_POST["lparn"][$submitted_array[31]];
		$lpar33 = $_POST["lparn"][$submitted_array[32]];
		$lpar34 = $_POST["lparn"][$submitted_array[33]];
		$lpar35 = $_POST["lparn"][$submitted_array[34]];
		$lpar36 = $_POST["lparn"][$submitted_array[35]];
		$lpar37 = $_POST["lparn"][$submitted_array[36]];
		$lpar38 = $_POST["lparn"][$submitted_array[37]];
		$lpar39 = $_POST["lparn"][$submitted_array[38]];
		$lpar40 = $_POST["lparn"][$submitted_array[39]];
		$lpar41 = $_POST["lparn"][$submitted_array[40]];
		$lpar42 = $_POST["lparn"][$submitted_array[41]];
		$lpar43 = $_POST["lparn"][$submitted_array[42]];
		$lpar44 = $_POST["lparn"][$submitted_array[43]];
		$lpar45 = $_POST["lparn"][$submitted_array[44]];
		$lpar46 = $_POST["lparn"][$submitted_array[45]];
		$lpar47 = $_POST["lparn"][$submitted_array[46]];
		$lpar48 = $_POST["lparn"][$submitted_array[47]];
		$lpar49 = $_POST["lparn"][$submitted_array[48]];
		$lpar50 = $_POST["lparn"][$submitted_array[49]];
		$lpar51 = $_POST["lparn"][$submitted_array[50]];
		$lpar52 = $_POST["lparn"][$submitted_array[51]];
		$lpar53 = $_POST["lparn"][$submitted_array[52]];
		$lpar54 = $_POST["lparn"][$submitted_array[53]];
		$lpar55 = $_POST["lparn"][$submitted_array[54]];
		$lpar56 = $_POST["lparn"][$submitted_array[55]];
		$lpar57 = $_POST["lparn"][$submitted_array[56]];
		$lpar58 = $_POST["lparn"][$submitted_array[57]];
		$lpar59 = $_POST["lparn"][$submitted_array[58]];
		$lpar60 = $_POST["lparn"][$submitted_array[59]];
		$lpar61 = $_POST["lparn"][$submitted_array[60]];
		$lpar62 = $_POST["lparn"][$submitted_array[61]];
		$lpar63 = $_POST["lparn"][$submitted_array[62]];
		$lpar64 = $_POST["lparn"][$submitted_array[63]];
		$lpar65 = $_POST["lparn"][$submitted_array[64]];
		$lpar66 = $_POST["lparn"][$submitted_array[65]];
		$lpar67 = $_POST["lparn"][$submitted_array[66]];
		$lpar68 = $_POST["lparn"][$submitted_array[67]];
		$lpar69 = $_POST["lparn"][$submitted_array[68]];
		$lpar70 = $_POST["lparn"][$submitted_array[69]];
		$lpar71 = $_POST["lparn"][$submitted_array[70]];
		$lpar72 = $_POST["lparn"][$submitted_array[71]];
		$lpar73 = $_POST["lparn"][$submitted_array[72]];
		$lpar74 = $_POST["lparn"][$submitted_array[73]];
		$lpar75 = $_POST["lparn"][$submitted_array[74]];
		$lpar76 = $_POST["lparn"][$submitted_array[75]];
		$lpar77 = $_POST["lparn"][$submitted_array[76]];
		$lpar78 = $_POST["lparn"][$submitted_array[77]];
		$lpar79 = $_POST["lparn"][$submitted_array[78]];
		$lpar80 = $_POST["lparn"][$submitted_array[79]];
		$lpar81 = $_POST["lparn"][$submitted_array[80]];
		$lpar82 = $_POST["lparn"][$submitted_array[81]];
		$lpar83 = $_POST["lparn"][$submitted_array[82]];
		$lpar84 = $_POST["lparn"][$submitted_array[83]];
		$lpar85 = $_POST["lparn"][$submitted_array[84]];
		$lpar87 = $_POST["lparn"][$submitted_array[86]];
		$lpar86 = $_POST["lparn"][$submitted_array[85]];
		$lpar88 = $_POST["lparn"][$submitted_array[87]];
		$lpar89 = $_POST["lparn"][$submitted_array[88]];
		$lpar90 = $_POST["lparn"][$submitted_array[89]];
		$lpar91 = $_POST["lparn"][$submitted_array[90]];
		$lpar92 = $_POST["lparn"][$submitted_array[91]];
		$lpar93 = $_POST["lparn"][$submitted_array[92]];
		$lpar95 = $_POST["lparn"][$submitted_array[93]];
		$lpar95 = $_POST["lparn"][$submitted_array[94]];
		$lpar96 = $_POST["lparn"][$submitted_array[95]];
		$lpar97 = $_POST["lparn"][$submitted_array[96]];
		$lpar98 = $_POST["lparn"][$submitted_array[97]];
		$lpar99 = $_POST["lparn"][$submitted_array[98]];
		$lpar100 = $_POST["lparn"][$submitted_array[99]];
		$lpar101 = $_POST["lparn"][$submitted_array[100]];
		$lpar102 = $_POST["lparn"][$submitted_array[101]];
		$lpar103 = $_POST["lparn"][$submitted_array[102]];
		$lpar104 = $_POST["lparn"][$submitted_array[103]];
		$lpar105 = $_POST["lparn"][$submitted_array[104]];
		$lpar106 = $_POST["lparn"][$submitted_array[105]];
		$lpar107 = $_POST["lparn"][$submitted_array[106]];
		$lpar108 = $_POST["lparn"][$submitted_array[107]];
		$lpar109 = $_POST["lparn"][$submitted_array[108]];
		$lpar110 = $_POST["lparn"][$submitted_array[109]];
		$lpar111 = $_POST["lparn"][$submitted_array[110]];
		$lpar112 = $_POST["lparn"][$submitted_array[111]];
		$lpar113 = $_POST["lparn"][$submitted_array[112]];
		$lpar114 = $_POST["lparn"][$submitted_array[113]];
		$lpar115 = $_POST["lparn"][$submitted_array[114]];
		$lpar116 = $_POST["lparn"][$submitted_array[115]];
		$lpar117 = $_POST["lparn"][$submitted_array[116]];
		$lpar118 = $_POST["lparn"][$submitted_array[117]];
		$lpar119 = $_POST["lparn"][$submitted_array[118]];
		$lpar120 = $_POST["lparn"][$submitted_array[119]];
		$lpar121 = $_POST["lparn"][$submitted_array[120]];
		$lpar122 = $_POST["lparn"][$submitted_array[121]];
		$lpar123 = $_POST["lparn"][$submitted_array[122]];
		$lpar124 = $_POST["lparn"][$submitted_array[123]];
		$lpar125 = $_POST["lparn"][$submitted_array[124]];
		$lpar126 = $_POST["lparn"][$submitted_array[125]];
		$lpar127 = $_POST["lparn"][$submitted_array[126]];
		$lpar128 = $_POST["lparn"][$submitted_array[127]];
		$lpar129 = $_POST["lparn"][$submitted_array[128]];
		$lpar130 = $_POST["lparn"][$submitted_array[129]];
$lpar131 = $_POST["lparn"][$submitted_array[130]];
$lpar132 = $_POST["lparn"][$submitted_array[131]];
$lpar133 = $_POST["lparn"][$submitted_array[132]];
$lpar134 = $_POST["lparn"][$submitted_array[133]];
$lpar135 = $_POST["lparn"][$submitted_array[134]];
$lpar136 = $_POST["lparn"][$submitted_array[135]];
$lpar137 = $_POST["lparn"][$submitted_array[136]];
$lpar138 = $_POST["lparn"][$submitted_array[137]];
$lpar139 = $_POST["lparn"][$submitted_array[138]];
$lpar140 = $_POST["lparn"][$submitted_array[139]];
$lpar141 = $_POST["lparn"][$submitted_array[140]];
$lpar142 = $_POST["lparn"][$submitted_array[141]];
$lpar143 = $_POST["lparn"][$submitted_array[142]];
$lpar144 = $_POST["lparn"][$submitted_array[143]];
$lpar145 = $_POST["lparn"][$submitted_array[144]];
$lpar146 = $_POST["lparn"][$submitted_array[145]];
$lpar147 = $_POST["lparn"][$submitted_array[146]];
$lpar148 = $_POST["lparn"][$submitted_array[147]];
$lpar149 = $_POST["lparn"][$submitted_array[148]];
$lpar150 = $_POST["lparn"][$submitted_array[149]];
$lpar151 = $_POST["lparn"][$submitted_array[150]];
$lpar152 = $_POST["lparn"][$submitted_array[151]];
$lpar153 = $_POST["lparn"][$submitted_array[152]];
$lpar154 = $_POST["lparn"][$submitted_array[153]];
$lpar155 = $_POST["lparn"][$submitted_array[154]];
$lpar156 = $_POST["lparn"][$submitted_array[155]];
$lpar157 = $_POST["lparn"][$submitted_array[156]];
$lpar158 = $_POST["lparn"][$submitted_array[157]];
$lpar159 = $_POST["lparn"][$submitted_array[158]];
$lpar160 = $_POST["lparn"][$submitted_array[159]];
$lpar161 = $_POST["lparn"][$submitted_array[160]];
$lpar162 = $_POST["lparn"][$submitted_array[161]];
$lpar163 = $_POST["lparn"][$submitted_array[162]];
$lpar164 = $_POST["lparn"][$submitted_array[163]];
$lpar165 = $_POST["lparn"][$submitted_array[164]];
$lpar166 = $_POST["lparn"][$submitted_array[165]];
$lpar167 = $_POST["lparn"][$submitted_array[166]];
$lpar168 = $_POST["lparn"][$submitted_array[167]];
$lpar169 = $_POST["lparn"][$submitted_array[168]];
$lpar170 = $_POST["lparn"][$submitted_array[169]];
$lpar171 = $_POST["lparn"][$submitted_array[170]];
$lpar172 = $_POST["lparn"][$submitted_array[171]];
$lpar173 = $_POST["lparn"][$submitted_array[172]];
$lpar174 = $_POST["lparn"][$submitted_array[173]];
$lpar175 = $_POST["lparn"][$submitted_array[174]];
$lpar176 = $_POST["lparn"][$submitted_array[175]];
$lpar177 = $_POST["lparn"][$submitted_array[176]];
$lpar178 = $_POST["lparn"][$submitted_array[177]];
$lpar179 = $_POST["lparn"][$submitted_array[178]];
$lpar180 = $_POST["lparn"][$submitted_array[179]];
$lpar181 = $_POST["lparn"][$submitted_array[180]];
$lpar182 = $_POST["lparn"][$submitted_array[181]];
$lpar183 = $_POST["lparn"][$submitted_array[182]];
$lpar184 = $_POST["lparn"][$submitted_array[183]];
$lpar185 = $_POST["lparn"][$submitted_array[184]];
$lpar186 = $_POST["lparn"][$submitted_array[185]];
$lpar187 = $_POST["lparn"][$submitted_array[186]];
$lpar188 = $_POST["lparn"][$submitted_array[187]];
$lpar189 = $_POST["lparn"][$submitted_array[188]];
		//PRINTING THE MYSQL QUERY:
		//$sql=sprintf("SELECT DISTINCT SSCDQ FROM main WHERE LPAR = '%s'",$_POST["lparn"][$submitted_array[0]]);
		$sql=sprintf("SELECT DISTINCT VCS FROM main WHERE STATUS !='sunset' AND LPAR IN ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$lpar1, $lpar2, $lpar3, $lpar4, $lpar5, $lpar6, $lpar7, $lpar8, $lpar9, $lpar10, $lpar11, $lpar12, $lpar13, $lpar14, $lpar15, $lpar16, $lpar17, $lpar18, $lpar19, $lpar20, $lpar21, $lpar22, $lpar23, $lpar24, $lpar25, $lpar26, $lpar27, $lpar28, $lpar29, $lpar30, $lpar31, $lpar32, $lpar33, $lpar34, $lpar35, $lpar36, $lpar37, $lpar38, $lpar39, $lpar40, $lpar41, $lpar42, $lpar43, $lpar44, $lpar45, $lpar46, $lpar47, $lpar48, $lpar49, $lpar50, $lpar51, $lpar52, $lpar53, $lpar54, $lpar55, $lpar56, $lpar57, $lpar58, $lpar59, $lpar60, $lpar61, $lpar62, $lpar63, $lpar64, $lpar65, $lpar66, $lpar67, $lpar68, $lpar69, $lpar70, $lpar71, $lpar72, $lpar73, $lpar74, $lpar75, $lpar76, $lpar77, $lpar78, $lpar79, $lpar80, $lpar81, $lpar82, $lpar83, $lpar84, $lpar85, $lpar86, $lpar87, $lpar88, $lpar89, $lpar90, $lpar91, $lpar92, $lpar93, $lpar94, $lpar95, $lpar96, $lpar97, $lpar98, $lpar99, $lpar100, $lpar101, $lpar102, $lpar103, $lpar104, $lpar105, $lpar106, $lpar107, $lpar108, $lpar109, $lpar110, $lpar111, $lpar112, $lpar113, $lpar114, $lpar115, $lpar116, $lpar117, $lpar118, $lpar119, $lpar120, $lpar121, $lpar122, $lpar123, $lpar124, $lpar125, $lpar126, $lpar127, $lpar128, $lpar129, $lpar130, $lpar130, $lpar131, $lpar132, $lpar133, $lpar134, $lpar135, $lpar136, $lpar137, $lpar138, $lpar139, $lpar140, $lpar141, $lpar142, $lpar143, $lpar144, $lpar145, $lpar146, $lpar147, $lpar148, $lpar149, $lpar150, $lpar151, $lpar152, $lpar153, $lpar154, $lpar155, $lpar156, $lpar157, $lpar158, $lpar159, $lpar160, $lpar161, $lpar162, $lpar163, $lpar164, $lpar165, $lpar166, $lpar167, $lpar168, $lpar169, $lpar170, $lpar171, $lpar172, $lpar173, $lpar174, $lpar175, $lpar176, $lpar177, $lpar178, $lpar179, $lpar180, $lpar181, $lpar182, $lpar183, $lpar184, $lpar185, $lpar186, $lpar187, $lpar188, $lpar189);
		$sql1=sprintf("SELECT DISTINCT HOSTF FROM main WHERE STATUS !='sunset' AND LPAR IN ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$lpar1, $lpar2, $lpar3, $lpar4, $lpar5, $lpar6, $lpar7, $lpar8, $lpar9, $lpar10, $lpar11, $lpar12, $lpar13, $lpar14, $lpar15, $lpar16, $lpar17, $lpar18, $lpar19, $lpar20, $lpar21, $lpar22, $lpar23, $lpar24, $lpar25, $lpar26, $lpar27, $lpar28, $lpar29, $lpar30, $lpar31, $lpar32, $lpar33, $lpar34, $lpar35, $lpar36, $lpar37, $lpar38, $lpar39, $lpar40, $lpar41, $lpar42, $lpar43, $lpar44, $lpar45, $lpar46, $lpar47, $lpar48, $lpar49, $lpar50, $lpar51, $lpar52, $lpar53, $lpar54, $lpar55, $lpar56, $lpar57, $lpar58, $lpar59, $lpar60, $lpar61, $lpar62, $lpar63, $lpar64, $lpar65, $lpar66, $lpar67, $lpar68, $lpar69, $lpar70, $lpar71, $lpar72, $lpar73, $lpar74, $lpar75, $lpar76, $lpar77, $lpar78, $lpar79, $lpar80, $lpar81, $lpar82, $lpar83, $lpar84, $lpar85, $lpar86, $lpar87, $lpar88, $lpar89, $lpar90, $lpar91, $lpar92, $lpar93, $lpar94, $lpar95, $lpar96, $lpar97, $lpar98, $lpar99, $lpar100, $lpar101, $lpar102, $lpar103, $lpar104, $lpar105, $lpar106, $lpar107, $lpar108, $lpar109, $lpar110, $lpar111, $lpar112, $lpar113, $lpar114, $lpar115, $lpar116, $lpar117, $lpar118, $lpar119, $lpar120, $lpar121, $lpar122, $lpar123, $lpar124, $lpar125, $lpar126, $lpar127, $lpar128, $lpar129, $lpar130, $lpar130, $lpar131, $lpar132, $lpar133, $lpar134, $lpar135, $lpar136, $lpar137, $lpar138, $lpar139, $lpar140, $lpar141, $lpar142, $lpar143, $lpar144, $lpar145, $lpar146, $lpar147, $lpar148, $lpar149, $lpar150, $lpar151, $lpar152, $lpar153, $lpar154, $lpar155, $lpar156, $lpar157, $lpar158, $lpar159, $lpar160, $lpar161, $lpar162, $lpar163, $lpar164, $lpar165, $lpar166, $lpar167, $lpar168, $lpar169, $lpar170, $lpar171, $lpar172, $lpar173, $lpar174, $lpar175, $lpar176, $lpar177, $lpar178, $lpar179, $lpar180, $lpar181, $lpar182, $lpar183, $lpar184, $lpar185, $lpar186, $lpar187, $lpar188, $lpar189);
		
		$result=0;
		$result1=0;	
		$result=mysqli_query($con,$sql);
		$result1=mysqli_query($con,$sql1);


		//counting queues
		$count_items = mysqli_num_rows($result);

		//counting servers
		$count_items1 = mysqli_num_rows($result1);

		
 		//echo [$result];
		//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    		//printf ("%s",$row["SSCDQ"]);
			
		// Free result set
		//mysqli_free_result($result);
		//mysqli_close($con);;
									
}
else
{
	echo 'Please select at least one option';
}
}
?>
	<h4>Queues: <?php echo $count_items; ?> </h4>
        <h4>Servers:  <?php echo $count_items1; ?> </h4>
<center>
	<input type="button" class="mybutton" onclick="tableToExcel('myTable', 'myTable2')" value="Export Queues"> - 
	<input type="button" class="mybutton" onclick="tableToExcel('myTable2', 'myTable2')" value="Export Servers">
</center>
<table id="myTable">	    
    <?php error_reporting(0); while ($row = mysqli_fetch_array($result)) {?>
    <tbody>
    <tr>
    <td align=left><?php echo $row['VCS']; ?></td>
    </tr> 	    
    </tbody>
<?php } ?>	
</table> <br>

<h5>Servers: <?php echo $count_items1; ?> </h5>

<table id="myTable2">	    
    <?php error_reporting(0); while ($row = mysqli_fetch_array($result1)) {?>
    <tbody>
    <tr>
    <td align=left><?php echo $row['HOSTF']; ?></td>
    </tr> 	    
    </tbody>
<?php } ?>	
</table> <br>	

<script>
function myFunction4() {
    location.reload();
}
function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}	
	
</script>
</html>
