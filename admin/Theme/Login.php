<?php
if(isset($_POST['Login']))
{
include 'Database_Connect.php';
	$u=$_POST['username'];
	$p=$_POST['password'];
	
	$user=$u;
	$pass=$p;
	
	$que=mysql_query("select * from admin_info where Username='$user' and Password='$pass'");
	
	$count1=mysql_num_rows($que);
	
	if($count1>0)
	{
		session_start();
		$_SESSION['admin']=$user;
		header("location:index.php");
	}
	else
	{
		header("location:index.php");
	}
}
?> 
<html>
<head>
<title> RTO Website Admin </title>
<link href="fb_font/font.css" rel="stylesheet" type="text/css">

<style>
#login_button
{
	font-size:15px;
	height:35;
	width:100;
	padding:2;
	background-color:#5B74A8; 
	color:#FFFFFF;
	border-top:#29447E;
	border-right-color:#29447E;
	border-bottom-color:#1A356E;
	border-left-color:#29447E;
	font-weight:bold;
	box-shadow:0px 0px 5px 2px rgb(0,0,0);
}
#go_to_fb
{
	font-size:15px;
	height:35;
	width:200;
	padding:2;
	background-color:#CCC; 
	color:#000;
	border-top:#29447E;
	border-right-color:#29447E;
	border-bottom-color:#1A356E;
	border-left-color:#29447E;
	font-weight:bold;
	box-shadow:0px 0px 5px 2px rgb(0,0,0);
}
</style>
</head>
<body>

<!--head background-->
	<div style="position:absolute;left:0%;top:0%; height:13.2%; width:100%; z-index:-1; background:#124D6F"> <h2 style="color:white;"> Commissionerate of Transport, Maharashtra </h2>  </div>
	<!--text: faceback -->
	<div style="position:absolute;left:43%; top:3.3%; font-size:45; font-weight:900; color:#FFFFFF; font-weight:bold; box-shadow:0px -10px 20px 1px rgb(0,0,0);"> <font face="myFbFont"> RTO Website Admin </font> </div>
	<!--body background-->
	<div style="position:absolute;left:0%;top:13.2%; height:90%; width:100%; z-index:-1; background:#EDF0F5">   </div>
	<!--bottam background-->
	<div style="position:absolute;left:0%;top:110%; height:5%; width:100%; z-index:-1; background:#FFFFFF">   </div>
    
    <div style="position:absolute; left:10%; top:15%;"> <img src="img/f4.jpg" width="500" height="500"> </div> 
    
    <div style="position:absolute;left:60%;top:26%; height:60%; width:30%; background:#FFF; box-shadow:0px 0px 10px 3px rgb(21,57,147);">   </div>
     
    <div style="position:absolute;left:70.5%; top:28%; font-size:45; font-weight:900; color:#3B5998; font-weight:bold;">  Login </div>
    
     
     
     <form  method="post">
     <div style="position:absolute;left:62%; top:45%; font-size:25; font-weight:900; color:#3B5998; font-weight:bold;" ">  Username </div>
     <div style="position:absolute; left:62%; top:50%;  "> <input type="text" name="username" required="required" style="width:350; height:40; font-size:20px;"/> </div>
     <div style="position:absolute;left:62%; top:58%; font-size:25; font-weight:900; color:#3B5998; font-weight:bold;" >  Password </div>
     <div style="position:absolute;left:62%; top:63%; font-size:13px; "> <input type="password" required="required" name="password" style="width:350; height:40; font-size:20px;" required="required"> </div>
     <div style="position:absolute;left:80.5%;top:75%; ">  <input type="submit" name="Login" value="Log In" id="login_button" />  </div>
    </form>
    
    <form action="../../rtowebsite/index.html">
    	<div style="position:absolute;left:62%;top:75%; "> <input type="submit" value="back to Home" id="go_to_fb"> </div>
    </form>
  <div style="position:absolute;left:0%;top:102%; height:12%; width:100%; z-index:-1; background:#124D6F"> 
		<h3 style="color:white;"> Copyright © 2015 Transport Department, Government of Maharashtra <h3> </div>
</body>
</html>