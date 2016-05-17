<?php 

	define('DB_NAME', 'snomes');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'asQW12//**');
	define('DB_HOST', 'localhost');

	$link = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD);

	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}

	$db_selected = mysql_select_db (DB_NAME, $link);

	if (!$db_selected) {
		die('Cant use ' . DB_NAME . ': ' . mysql_error());
	}

	$value = $_POST['nome'];
	$value2 = $_POST['email'];

	$sql = "INSERT INTO sntabla (nome, email) VALUES('$value', '$value2')";

	if (!mysql_query($sql)) {
		die('Error ' . mysql_error());
	}

	mysql_close();
?>
