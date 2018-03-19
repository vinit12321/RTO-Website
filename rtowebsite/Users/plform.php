<?php
session_start();
include_once 'Database_Connect.php';

if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
}
$query1 = "SELECT Status,Userid FROM llform WHERE Userid = '" .$user ."'";
	$result = mysql_query($query1);
	

while($row1=mysql_fetch_array($result))
{
	$mrsname=$row1['Userid'];
    $st=$row1['Status'];
   
if($st=='Approved')
{
	
	
	
}
else
{
	header("Location:Home.php");
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

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

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
                    <li><a class="logout" href="logout.php">Logout</a></li>
              
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
                      <a class="active" href="Home.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  
                   	
                  
                  
                  

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Online Services </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="llform.php">Apply Learning Licence</a></li>
                          <li><a  href="plform.php">Apply Permanent License</a></li>
                         
                                             </ul>
                  </li>
                  
                  
					 <li class="sub">
                      <a href="status.php" >
                          <i class="fa fa-tasks"></i>
                          <span>View Status </span>
                      </a>
                    
                  </li>
 <li class="sub-menu">
                      <a href="DemoTestHome.php" >
                          <i class="fa fa-book"></i>
                          <span>Online Test</span>
                      </a>
                      </li>
 <li class="sub-menu">
                      <a href="vehiclereg.php" >
                          <i class="fa fa-book"></i>
                          <span>New Vehicle Registration</span>
                      </a>
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
         <div>
<h3 class="redHeading">Instructions for filling the online PL Applications.</h3>
<br/>
<ol class="numberPoints">
<li>Columns marked as (*) are mandatory.</li>
<li>Select the State and RTO/DTO Under the jurisdiction where the applicant resides.</li>
<li>Part-A(Applicant Details Section) The Applicants Name must be in the order as First,Middle,Last name respectively.Ensure the same name is present in the proofs while producing near the RTO.</li>
<li>Part-B(Class Of Vehicle's Section) Applicant must Select atleast one Class Of Vehicle by checking on the Check Box's present.</li>
<li>Part-C(Enclosure's Section)Please fill the details of Enclosure's which you are Producing as proof documents.If you are holding a DL or LL,please mention those details by Selecting appropriate Document Type.</li>
<li>Part-D:Go through this part and fill the details if Applicable only.</li>
<li>It is suggested to submit the applications well in advance, in order to avail the service at the concerned office, without any inconvenience.</li>
<li>You can Go through the entire Help Document for New LL/DL. <a href="#">(Download)</a></li>
</ol>
</div>
<br/>
<div>
<form method="POST"  name="terms" action="newpllicense.php">
<input type="checkbox" name="conditions" value="0" style="width:15px;height:15px;" required="required" id="myCheck"/><span> I Read the above instrcutions carefully</span></div>
<br/>

<input type="Submit" value="Proceed" class="formButton" id="btn-proceed" 
 />

<input type="button" value="Decline" class="formButton" id="btn-decline" 
 />
</form>

       
        <!-- Page Heading/Breadcrumbs -->
 

	
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
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        
	</script>
	
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
  

  </body>
</html>

