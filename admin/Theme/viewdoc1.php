<?php
   $rsid= $_REQUEST['id'];
    include("Database_Connect.php");	
	$query1 = "SELECT * FROM llform WHERE Application_id = '" .$rsid ."'";
	$result = mysql_query($query1);
  	$row=mysql_fetch_array($result);
    Print '<td align="center"><img src="data:image/png;base64,' . base64_encode($row['image2']) . '" /></a></td>';



?>