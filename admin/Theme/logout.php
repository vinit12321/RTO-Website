<?php
include 'Database_connect.php';
session_start();
	session_destroy();
	header("Location:Login.php?");

?>