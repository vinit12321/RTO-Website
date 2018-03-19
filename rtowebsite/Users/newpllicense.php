<?php
session_start();
include_once 'Database_Connect.php';

if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
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
		<h3><i class="fa fa-angle-right"></i>PL Application requests</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
        
			

  <div>
<table border="0px" style="border-color: white;" width="80%">
			<tr>
				<th colspan="4">Form of Application for New Licence to Drive a Motor Vehicle</th>
			</tr>
			<tr>
				<td><h3><i class="fa fa-angle-right"></i>Part A:</h3></td>
			</tr>	
</form>			
			<tr>
         <form name="LLform" class="" role="form" method="post" action="LLConfirmDetails.php"  enctype="multipart/form-data"> 
			
			<div class="form-group"><td>Name Of Applicant: </td> </div>
		<div class="form-group"><td><input type="text" class="form-control" id="email" placeholder="First Name" name="firstname" required="required"/></td> </div>
		<div class="form-group"><td><input type="text" class="form-control" id="email" placeholder="Middle Name"  name="middlename" required="required"/></td>  </div>
		<div class="form-group"><td><input type="text" class="form-control" name="lastname" placeholder="Last Name"  name="lastname" required="required"/></td> </div>
			</tr>	
			
			<tr>
				<td> Gender: * </td>
				<td><input type="radio" name="sex" value="male" class="" required="required" /> Male</td>
				<td><input type="radio" name="sex" value="female" class="" required="required" /> Female</td
			</tr>
			<tr>
			<div class="form-group">
			<td>
   
				Date of birth: (dd-mm-yyyy) </td>
				<td><input type="text" class="form-control" name="dob" placeholder="Date of birth"  /></td>
				
				<td>Or Age:</td>
				<td><input type="text" class="form-control" name="age" placeholder="Age"   /></td>
			</tr>
                </div>   
            <tr>
			<td> <label for="">Permanent Address:</label></td>            
            </tr>
            <tr>
            <td>
            <label for="">City:</label> </td>
            <td>     <input type="text" placeholder="City" name="city" class="form-control"  /> </td>
                    <td><label for="">Taluka:</label> </td>
                     <td>   <input type="text" placeholder="taluka" name="taluka"  class="form-control"  /></td>
                        
                        </tr>
                        
   <tr>
   <td> <label for="">State:</label> </td>
<td><input type="text" placeholder="State" name="state"  class="form-control"/></td>
<td> <label for="">Pin code:</label></td>
<td><input type="text" placeholder="PinCode" name="pincode"  class="form-control"  /></td>
   
   
   </tr>
            
            
            
			 <table>
            <tr>  <td> 	<h3><i class="fa fa-angle-right"></i>Part B:</h3></td></tr>
            <tr>
			<td>
            <div class="form-group">
      <label class="control-label col-sm-12" for="">Vehicle Type</label>
	  </td>
	  <td>
            <select class="form-control" name="type" >
	<option>	Motor Cycle without Gear </option>
    	<option>	Motor Cycle with Gear </option>
    <option> Four Wheeler car </option>
</select>	
	  </td>
      

      </tr>     	
            
            	
   			
           <table class="table">
		   <h3><i class="fa fa-angle-right"></i>Part C:</h3>
				<td>
				List of enclosures(For age Proof and address proof) 
				</td>
			</tr>
			<tr>
				<th>Document type</th>
				<th>License No./certificate No.</th>
			     <th>Document File </th>
			</tr>
			<tr>
		 <td><select name="doc1" style="width:70%;" name="type"> <option>Electio-Id</option>
		 <option>Pan-Card</option>
		 <option>Adhar Card</option>
		 
		 
				 </select></td>
				<td><input type="text" style="border:none; " name="num" required="required"/></td>
			<td> <input type="file"  size="20" required="required" name="image"/></td>
				
			</tr>
			
			<tr>
		 <td><select name="doc2" style="width:70%;"> <option>Electio-Id</option>
		 <option>Pan-Card</option>
		 <option>Adhar Card</option>
		 
		 
				 </select></td>
				<td><input type="text" style="border:none;"  required="required" name="num"/></td>
				<td> <input type="file" accept="jpeg" size="20" required="required" name="image1"  /></td>
				
			</tr>
          	  
   </table>         
      
			 <table>
			  <tr>  <td> 	<h3><i class="fa fa-angle-right"></i>Part D:</h3></td></tr>
            <tr>
			<td>
            	  <label class="control-label col-sm-12" for=""> Your Photo:</label>
	
         
			<div class="form-group">
				<td>
      <input type="file" accept="jpeg" size="20"  name="image1" class="form-control"  />
     
	  </td>
	  <td> OR <a href="capture.php"> Click here to Capture</a> </td>
	  </tr>
	  <tr>
			<td>
            	  <label class="control-label col-sm-12" for=""> Your Signature:</label>
         
			<div class="form-group">
				<td>
      <input type="file" accept="jpeg" size="20" required="required" name="image1" class="form-control" />
	  </td>
	  </tr>
	  
	  
	 </table>
		<br>
		<br>	 

			<div class="row">
			<div class="col-md-2">
			 <input type="submit" name="btnsub" value="Submit" class="btn btn-primary" onclick=""/></a>
			</div>
   
   </form>

   
      <form name="LLform"  method="post" action=""> 
			<div class="col-md-2">
			 <a href=""><input type="submit" name="btnsub" value="Decline" class="btn btn-primary" onclick=""/></a>
			</div>
			
      	    
	</form>

  
</div>
				
				
				
				
          	
          	
		 
		 















		 

 
  


       
        <!-- Page Heading/Breadcrumbs -->
 

	
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Copyright &copy 2015 Transport Department, Government of Maharashtra
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

