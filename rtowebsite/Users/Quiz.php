<?php
	session_start();
	error_reporting(1);
	extract($_POST);
	extract($_GET);
	extract($_SESSION);

	include("OLTest_Database_Connect.php");	

	if(isset($_SESSION['username']))
	{
		$uname=$_SESSION['username'];
	}
	else
	{
		$_SESSION['after_login'] = $_SERVER['REQUEST_URI'];
		
		header("Location:index.php?page=UserManagement/Login");
	}

	if(isset($subid) && isset($testid))
	{
	$_SESSION[sid]=$subid;
	$_SESSION[tid]=$testid;
	//header("location:quiz.php");	
	header("Location:quiz.php");	
	}
	if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
	{
	//header("location: index.php");
	header("Location:index.php?page=index");
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo Test</title>
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

<h3 class='style8' align=center>Quiz</h3>


<?php

	$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
	if(!isset($_SESSION[qn]))
	{
		$_SESSION[qn]=0;
		mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
		$_SESSION[trueans]=0;
		
	}
	else
	{
		if($submit=='Next Question' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
					$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				mysql_query("insert into mst_result(login,test_id,test_date,score) values('$uname',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=Review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
	}


	$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
	if($_SESSION[qn]>mysql_num_rows($rs)-1)
	{
		unset($_SESSION[qn]);
		echo "<h1 class=head1>Some Error  Occured</h1>";
		session_destroy();
		echo "Please <a href=index.php?page=Index> Start Again</a>";

		exit;
	}
	mysql_data_seek($rs,$_SESSION[qn]);
	$row= mysql_fetch_row($rs);
	echo "<form name=myfm method=post action=Quiz.php>";
	echo "<table width=100%> <tr> <td width=60>&nbsp;<td> <table border=0>";
	$n=$_SESSION[qn]+1;
	echo "<tr><td><span class=style2>Que ".  $n .": $row[2]</span></td><tr>";
	echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]</input></td></tr>";
	echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
	echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
	echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";

	if($_SESSION[qn]<mysql_num_rows($rs)-1)
	echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
	else
	echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
	echo "</table></table>";
?>


<table width="100%"  border="0" align="center">

</table>

</body>
</html>