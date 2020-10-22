<?php
$vcap_services = json_decode($_ENV['VCAP_SERVICES'], true);
$uri = $vcap_services['compose-for-mysql'][0]['credentials']['uri'];
$db_creds = parse_url($uri);
$dbname = "composer";

$dsn = "mysql:host=" . $db_creds['host'] . ";port=" . $db_creds['port'] . ";dbname=" . $dbname;
$db = new PDO($dsn, $db_creds['user'], $db_creds['pass']);

?>
