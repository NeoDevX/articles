<?php 
	
	require_once 'config.php'

	$connection = array(
		$config['db']['server'],
		$config['db']['username'],
		$config['db']['password'],
		$config['db']['namer']
	);

	if (!$connection)
	{
		echo "Не удалось подключиться к базе данных :( !<br>";
		echo mysqli_connect_error();
		exit();
	}

?>