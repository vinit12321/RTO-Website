<?php
include 'Database_connect.php';
session_start();
	session_destroy();
	header("Location:/Final RTO Project/rtowebsite/index.html");

?>