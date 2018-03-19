<?php
include 'Database_Connect.php';
$rsid1= $_REQUEST['id'];
	$query1 = "UPDATE llform SET Status='Rejected' WHERE Application_id = '" .$rsid1 ."'";
	$result = mysql_query($query1);
  	//$row=mysql_fetch_array($result);
  	echo "Hiii";
header("Location:blank.php");
		
	
  	
?>

