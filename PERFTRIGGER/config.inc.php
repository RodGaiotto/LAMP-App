if(_SITE_MODE == "debug"){
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors','1');
	ini_set('display_startup_errors','1');
	error_reporting (E_ALL);
}

class Config
{

	var $host = '';
	var $user = '';
	var $password = '';
	var $database = '';

	function Config()
	{
	$this->host = "sl-us-south-1-portal.25.dblayer.com:41969";
	$this->user = "admin";
	$this->password = "YVVIBOUSWCGEVYSW";
	$this->database = "ptdb";
	}
}
