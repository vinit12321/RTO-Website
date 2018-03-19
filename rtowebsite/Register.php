<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'Database_Connect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$pno = mysql_real_escape_string($_POST['Pno']);
	$dob = mysql_real_escape_string($_POST['dob']);
   	$add = mysql_real_escape_string($_POST['add']);
   	$age = mysql_real_escape_string($_POST['age']);
	
        if($age >=18 )
        {
            
            	if(mysql_query("INSERT INTO UserDetails(username,email,password,PhoneNumber,DOB,Address,Age) VALUES('$uname','$email','$upass','$pno','$dob','$add','$age')"))
	{
	   
		?>
        <script>alert('successfully registered ');
		
		</script>
        <?php
	
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
        <?php
	}
            
            
        }
        else
        {
            ?>
        <script>alert('Only Above 18 years can be Apply For Licence...');</script>
        <?php
            
        }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>RTO Website</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
     <link href="assets/4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="assets/4/js-image-slider.js" type="text/javascript"></script>
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      ************************************ header black-bg*********************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Commissionerate of Transport, Maharashtra</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Login</a></li>
                     <li><a class="logout" href="Register.php">Register</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              
              
        
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/12.jpg" class="img-circle" width="90"></a></p>
              	
              	  	
                  <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  
                   	
                  
                  
                  

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Website Info</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="about.php">About Us</a></li>
                          <li><a  href="contact.php">Contact us</a></li>
                          <li><a  href="faq.php">FAQ</a></li>
                                             </ul>
                  </li>
                  
                  
					 <li class="sub">
                      <a href="forms.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                    
                  </li>
 <li class="sub-menu">
                      <a href="rtolist.php" >
                          <i class="fa fa-book"></i>
                          <span>RTO List</span>
                      </a>
                      </li>
 <li class="sub-menu">
                      <a href="RoadSign.php" >
                          <i class="fa fa-book"></i>
                          <span>Road Signs</span>
                      </a>
                      </li>



                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Online Services</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="login.php">Learnig Licence</a></li>
                          <li><a  href="login.php">Permanent Licence</a></li>
                         <li><a  href="login.php">Online Test</a></li>
                      </ul>
                  </li>
                 </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
  <section id="main-content">
          <section class="wrapper site-min-height">
 <center>
 <div class="container">

<form method="post" class="form-horizontal" action="Register.php">
<table align="center" width="30%" border="0">
<tr>
	<td colspan="2" style="text-align: left;"><h3>User Registration</h3></td>
</tr>
<tr>
<div class="form-group"><td><label class="col-sm-3 control-label"> User Name:</td> </label> </div>
<div class="form-group"> <td><input type="text" name="uname" class="form-control" placeholder="User Name" required /></td> </div>
</tr>
<tr>
 <div class="form-group"><td class="labelText">Email Address: </td> </div>
<div class="form-group"> <td><input type="email" name="email" class="form-control" placeholder="Your Email" required /></td> </div>
</tr> 
<tr>
<div class="form-group"> <td class="labelText">Password:</td> </div>
<td><input type="password" name="pass" class="form-control" placeholder="Your Password" required /></td>
</tr>
<tr>
<td class="labelText">Phone Number:</td>
<td><input type="text" name="Pno" class="form-control" placeholder="Your Phone Number" required /></td>
</tr>
<tr>
 <div class="form-group"> <td class="labelText">Date Of Birth:</td> </div>
<td><input type="text" name="dob" class="form-control" id="datepicker" placeholder="Your Date of Birth" required /></td>
</tr>
<tr>
<td class="form-group">Age:</td>
<td><input type="text" name="age" class="form-control" id="datepicker" placeholder="Your Age" required /></td>
</tr>


<tr>
 <div class="form-group"> <td class="labelText">Address:</td> </div>
<td><textarea rows="4" cols="45" style="font-size:16px;background:#f9f9f9;" name="add" placeholder="Your Address" required="required"> </textarea></td>
</tr>
<tr>
<td></td>
<td><button type="submit" name="btn-signup" class="formButton">Sign Me Up</button></td>
</tr>
<tr>
<td></td>
<td><a href="Login.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
		  
		  
		  
		  
		  
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Copyright © 2015 Transport Department, Government of Maharashtra
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  
  
  <script>
            $(document).ready(function(){
                $( "#datepicker").datepicker({
                    dateFormat: 'yy-mm-dd',
                    showOn: "button",
                    buttonImage: "../Resources/Images/calendar.gif",
                    buttonImageOnly: true
                });
            });
    </script>

  </body>
</html>
