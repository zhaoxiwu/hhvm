<?php
	require_once("connect.inc");

	/************************
	 * statement call  after close
	 ************************/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	$stmt2 = mysqli_prepare($link, "SELECT CURRENT_USER()");

	mysqli_close($link);
	@mysqli_stmt_execute($stmt2);
	@mysqli_stmt_close($stmt2);
	printf("Ok\n");
?>