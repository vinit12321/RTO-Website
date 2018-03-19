<?php
include 'Database_Connect.php';
$rsid1= $_REQUEST['id'];
	$query1 = "UPDATE plform SET Status='Rejected' WHERE Application_id = '" .$rsid1 ."'";
	$result = mysql_query($query1);
  	//$row=mysql_fetch_array($result);

header("Location:blank.php");
		
	
  	
?>

