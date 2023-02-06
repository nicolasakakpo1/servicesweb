

<?php
	require("connection.php");
	session_start();
	header("location:login");
	session_destroy();
	exit();
?>