<?php
session_start();

if(isset($_SESSION['username']))
{
	$uname=$_SESSION['username'];
}


include_once 'Database_Connect.php';

if(isset($_POST['btnsub']))
{
	$regrto = mysql_real_escape_string($_POST['regRTO']);
	$dealer = mysql_real_escape_string($_POST['dealer']);
	$ownersname =(mysql_real_escape_string($_POST['ownersname']));
	
	$dob = mysql_real_escape_string($_POST['dob']);
	$age = mysql_real_escape_string($_POST['age']);
	
   	$city = mysql_real_escape_string($_POST['city']);
   	$state = mysql_real_escape_string($_POST['state']);
    $country = mysql_real_escape_string($_POST['country']);
   	$pincode = mysql_real_escape_string($_POST['pincode']);
   	
   	$vclass = mysql_real_escape_string($_POST['vclass']);
   	$vtype = mysql_real_escape_string($_POST['vtype']);
   	
   	$enginenumber = mysql_real_escape_string($_POST['EngineNumber']);
   	$chassisnumber = mysql_real_escape_string($_POST['ChassisNumber']);
   	
	
	if(mysql_query( "INSERT INTO `nvregistration` (`RegRTO`, `DealerName`, `Ownername`, `Gender`, `DOB`, `Age`, `Application_id`, `username`, `llcity`, `llstate`, `llcountry`, `llpincode`, `vehiclass`, `vehitype`, `enginenumber`, `chassisnumber`, `Status`) VALUES ('$regrto', '$dealer', '$ownersname', '', '$dob', '$age', NULL,'', '$city', '$state', '$country', '$pincode', '$vclass', '$vtype', '$enginenumber', '$chassisnumber', 'Submitted')" ) )
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
        //header("Location:index.php?page=LLConfirmDetails");
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
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
          
<form name="NVform" method="post">
<table border="0px" style="border-color: white;" width="80%">


			<tr>
				<th colspan="4">Motor Vehicle Registration</th>
			</tr>
			<tr>
				<td colspan="4" align="center">Note: Required fields are marked with an asterisk (*)</td>
			</tr>						
			<tr>
				<td>Registering RTO: *</td>
				<td>
				<select class="formtextbox" name="regRTO">
					<option value="">Select RTO</option>
					<option value="RTO Thane">RTO Thane</option>
					<option value="RTO Mumbai">RTO Mumbai</option>
					<option value="RTO Pune">RTO Pune</option>
				</select>
				</td>
				<td>Dealer Name: *</td>
				<td>
				<select class="formtextbox" name="dealer">
					<option value="">Select Dealer</option>
					<option value="Sai Point">Sai Point</option>
					<option value="Maruti Sazuki">Maruti Sazuki</option>
					<option value="Sai Service">Sai Service</option>
				</select>
				</td>

			</tr>
			
			<tr>
				<td><b>Owner Details:</b></td>
			</tr>
			<tr>
				<td>Owner's Name:</td>
				<td colspan="3"><input type="text" class="formtextbox" style="width:250px;" name="ownersname" placeholder="Owner's Name" required /></td>
			</tr>
			
			<tr>
				<td>Gender: *</td>
				<td><input type="radio" name="sex" value="male" class="formradio" required /> Male</td>
				<td><input type="radio" name="sex" value="female" class="formradio" required /> Female</td>
			</tr>
			<tr>
				<td>Date of birth: (dd-mm-yyyy)</td>
				<td><input type="text" class="formtextbox" name="dob" placeholder="Date of birth" required /></td>
				<td>Or Age:</td>
				<td><input type="text" class="formtextbox" name="age" placeholder="Age" required /></td>
			</tr>
			

			
			<tr>
				<td><b>Address Details:</b></td>
			</tr>
			
			<tr>
				<td>Address Line1:</td>
				<td colspan="3"><input type="text" class="formtextbox" style="width:250px;" name="addressline1" placeholder="Address Line1" required /></td>
			</tr>
			
			<tr>
            <td>
            <label for="">City:</label> </td>
            <td>     <input type="text" placeholder="City" name="city"required="required"> </td>
            
            			   <td> <label for="">State:</label> </td>
			<td><input type="text" placeholder="State" name="state" required="required"/></td>

                        
            </tr>
                        
			<tr>
                    <td><label for="">Country:</label> </td>
                     <td>   <input type="text" placeholder="country" name="country" required="required"/></td>
			<td> <label for="">Pin code:</label></td>
			<td><input type="text" placeholder="PinCode" name="pincode" required="required"/></td>
			</tr>
			 
			
			<tr>
				<td><b>Registeration Details:</b></td>
			</tr>
			
			
			<tr>
            <td>
            <label for="">Vehicle Class:</label> </td>
            	<td>
				<select class="formtextbox" name="vclass">
					<option value="">Select Vehicle Class</option>
					<option value="4 Wheeler Pass">4 Wheeler Pass</option>
					<option value="2 Wheeler Pass">2 Wheeler Pass</option>
					<option value="Bus">Bus</option>
					<option value="CaR Taxi">Car Taxi</option>
					<option value="L.M.V. Car">L.M.V Car</option>
				</select>
				</td>
            
            			   <td> <label for="">Vehicle Type:</label> </td>
			            	<td>
				<select class="formtextbox" name="vtype">
					<option value="">Select Vehicle Type</option>
					<option value="GOODS">GOODS</option>
					<option value="PRIVATE">PRIVATE</option>
					<option value="PASSENGER">PASSENGER</option>
					<option value="SPECIAL">SPECIAL</option>
				</select>
				</td>

                        
            </tr>
			
			<tr>
            <td>
            <label for="">Engine Number:</label> </td>
            <td>     <input type="text" placeholder="EngineNumber" name="EngineNumber"required="required"> </td>
            
            			   <td> <label for="">Chassis Number:</label> </td>
			<td><input type="text" placeholder="ChassisNumber" name="ChassisNumber" required="required"/></td>

                        
            </tr>
            
			<tr>
			<td colspan="2" align="right"><input type="submit" name="btnsub" value="Submit" class="formButton" /></td>
			<td><input type="button" value="Clear" class="formButton" id="btn-clear" /></td>
			</tr>
</table>		
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

