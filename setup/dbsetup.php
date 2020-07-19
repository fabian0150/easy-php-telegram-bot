<?php
	include("../config.php");

	$tbl_user = file_get_contents('./dbsetupscripts/tbl_user.sql');
	$tbl_log  = file_get_contents('./dbsetupscripts/tbl_log.sql');

	$db_conn = new mysqli($db_servername, $db_username, $db_password, $db_dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $db_conn->connect_error);
		exit();
	} else {
		echo "Database connected <hr";
	}

	
	$sql_user = $tbl_user;
	if ($db_conn->multi_query($sql_user) === TRUE) {
		echo "TBL_USER created!<br>";
	} else {
		echo "Error creating TBL_USER: " . $db_conn->error . "<br>";
	}

	echo "<hr>";

	$sql_log = $tbl_log;
	if ($db_conn->multi_query($sql_log) === TRUE) {
		echo "TBL_LOG created!<br>";
	} else {
		echo "Error creating TBL_LOG: " . $db_conn->error . "<br>";
	}
?>