<?php
 include("Database_Connect.php");	
	$query1 = "SELECT * FROM DownloadForms";
	$result = mysql_query($query1);

?>

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
                    <li><a class="logout" href="Login.php">Login</a></li>
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
          
          
          	
          	<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms:
                   
                </h1>
                </div>
          
          </div>
          	
          	
<table class="table">
			<tr>
					<th>Form</th>
				<th>Form Name</th>
				<th>Purpose</th>
				<th>Download Link</th>
			</tr>


<?php

while($row1=mysql_fetch_array($result))
{
	$name=$row1['Form'];
    $formtitle=$row1['FormTitle'];
    $purpose=$row1['Purpose'];
	$type=$row1['FileType'];
    
Print "<tr>";
Print '<td >'. $name . "</td>";
Print '<td >'. $formtitle . "</td>";
Print '<td >'. $purpose . "</td>";
$formURL = $name .'.'. $type;
Print '<td><a href="downloadform.php?filename='.$formURL.'">'. $name . "</a></td>";

Print "</tr>";

}
?>
          	
 </table>         	
          	
          	
          	
			
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