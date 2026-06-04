<?php
	$db = array(
		'host' => getenv('DB_HOST') ?: 'localhost',
		'name' => getenv('DB_NAME') ?: 'barbershop',
		'user' => getenv('DB_USER') ?: 'root',
		'pass' => getenv('DB_PASS') ?: '',
	);

	$configPath = __DIR__ . '/config.local.php';
	if (is_file($configPath)) {
		$localDb = require $configPath;
		if (is_array($localDb)) {
			$db = array_merge($db, $localDb);
		}
	}

    $dsn = 'mysql:host=' . $db['host'] . ';dbname=' . $db['name'];
	$user = $db['user'];
	$pass = $db['pass'];
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);
	try
	{
		$con = new PDO($dsn,$user,$pass,$option);
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo 'Good Very Good !';
	}
	catch(PDOException $ex)
	{
		echo "Failed to connect with database ! ".$ex->getMessage();
		die();
	}
?>
