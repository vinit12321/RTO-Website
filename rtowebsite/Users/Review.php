<?php
	session_start();
	error_reporting(1);
	extract($_POST);
	extract($_GET);
	extract($_SESSION);
	include("OLTest_Database_Connect.php");
	if($submit=='Finish')
	{
		mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
		unset($_SESSION[qn]);
		header("Location:Home.php");
		exit;
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Review Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../Pages/Styles/quiz.css" rel="stylesheet" type="text/css">

<style type="text/css">
	
	.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {
	color: #990000;
	font-weight: bold;
}
.style4 {
	color: #000000;
	font-weight: bold;
}
.style5 {color: #990033}
.style6 {color: #ECE9D8}
.style7 {
	color: #993300;
	font-weight: bold;
}
.style8 {
	color: #6633CC;
	font-weight: bold;
}
a:link {
	color: #330066;
	text-decoration: none;
}
a:hover {
	color: #FFCC00;
	text-decoration: underline;
}
a:visited {
	color: #330066;
	text-decoration: none;
}
.head1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #FF0000;
	text-align: center;
	font-weight: bold;
}
.errors {

	color: #FF0000;
	font-weight: bold;
}
.tot {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #000000;
}
.tot {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #000000;
	
}
.tans {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color:#00CC66 ;
}
.fans {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color:#FF0000 ;
}

</style>

</head>

<body>

<?php
	echo "<h1 class=head1> Review Test Question</h1>";

	if(!isset($_SESSION[qn]))
	{
			$_SESSION[qn]=0;
	}
	else if($submit=='Next Question' )
	{
		$_SESSION[qn]=$_SESSION[qn]+1;
		
	}
	
	$rs=mysql_query("select * from mst_useranswer where sess_id='" . session_id() ."'",$cn) or die(mysql_error());
	mysql_data_seek($rs,$_SESSION[qn]);
	$row= mysql_fetch_row($rs);
	
	echo "<form name=myfm method=post action=Review.php>";
	
	echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
	$n=$_SESSION[qn]+1;
	echo "<tr><td><span class=style2>Que ".  $n .": $row[2]</style>";
	echo "<tr><td class=".($row[7]==1?'tans':'style8').">$row[3]";
	echo "<tr><td class=".($row[7]==2?'tans':'style8').">$row[4]";
	echo "<tr><td class=".($row[7]==3?'tans':'style8').">$row[5]";
	echo "<tr><td class=".($row[7]==4?'tans':'style8').">$row[6]";
	if($_SESSION[qn]< 4 -1)
	{
			echo "<tr><td><input type=submit name=submit value='Next Question'>";
	}

	else
	{
			echo "<tr><td><input type=submit name=submit value='Finish'>";
	}


	echo "</table></table></form>";
	
?>
</body>
</html>