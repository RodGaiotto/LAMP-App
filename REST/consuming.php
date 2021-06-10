<?php
	//GET Request
	//if(isset($_POST['submit'])){

	$name = $_POST['name'];

	//Resource Address

	$url="http://perftrigger.pok.ibm.com/rest/index.php?name=$name";

	//Send GET request to resource
	//GET = TAKE INFORMATION so CURLOPT_RETURN!
	//if the idea be sending data to update it would be needed to use POST:
	//curl_setopt($client,CURLOPT_POST,$data);

	
	//TESTING output $name variable
	//echo $name;
	//TESTING output $url variable
	//echo $url;	


	$client=curl_init($url);
	
	curl_setopt($client,CURLOPT_RETURNTRANSFER,1);


	//Get response from resource

	$response=curl_exec($client);

	//echo $response;

	//Decoding Json to better appearence

	$result=json_decode($response);

	//echo $result->status_message;
	echo "<b>BOOK: </b>".$name;
	echo "<br>";
	echo "<b>STATUS: </b>".$result->status_message;
	echo "<br>";
	echo "<b>PRICE: </b>".$result->data;
	
//}
?>
