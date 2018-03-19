<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php  
include 'Database_Connect.php';

 $rsid= $_REQUEST['id'];
  
	$query1 = "SELECT * FROM llform WHERE Application_id = '" .$rsid ."'";
	$result = mysql_query($query1);
  	$row=mysql_fetch_array($result);

?>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Commissionerate of Transport, Maharashtra </b></a>
            <!--logo end-->
           
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="Login.php">Logout</a></li>
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
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/Capture.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Vinit Dabake</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Applications Request</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.php">LL Application</a></li>
                          <li><a  href="pl.php">Permanent Applications</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Adding Files</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">PDF</a></li>
                          <li><a  href="gallery.html">Photos</a></li>
                         
                      </ul>
                  </li>
                 
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
          	<h3><i class="fa fa-angle-right"></i>LL Application requests</h3>
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
         <?php   echo '<form name="LLform" class="form-inline" role="form" method="post" action="accept.php?id='.$rsid.'"> ';  ?>
			
			<div class="form-group"><td>Name Of Applicant: </td> </div>
		<div class="form-group"><td><input type="text" class="form-control" id="email" disabled="disabled" value="<?php echo $row['FirstName'] ?>" /></td> </div>
		<div class="form-group"><td><input type="text" class="form-control" id="email" placeholder="Middle Name" disabled="disabled" value="<?php echo $row['MiddleName'] ?>" /></td>  </div>
		<div class="form-group"><td><input type="text" class="form-control" name="lastname" placeholder="Last Name" disabled="disabled" value="<?php echo $row['LastName'] ?>" /></td> </div>
			</tr>	
			
			<tr>
				<td> Gender: * </td>
				<td> <label for="" class="form-control"> <?php echo $row['Gender'] ?></label></td>
			</tr>
			<tr>
			<div class="form-group">
			<td>
   
				Date of birth: (dd-mm-yyyy) </td>
				<td><input type="text" class="form-control" name="dob" placeholder="Date of birth" disabled="disabled" value="<?php echo $row['DOB'] ?>"  /></td>
				
				<td>Or Age:</td>
				<td><input type="text" class="form-control" name="age" placeholder="Age" disabled="disabled" value="<?php echo $row['Age'] ?>" /></td>
			</tr>
                </div>   
            <tr>
			<td> <label for="">Permanent Address:</label></td>            
            </tr>
            <tr>
            <td>
            <label for="">City:</label> </td>
            <td>     <input type="text" placeholder="City" name="city" class="form-control" value="<?php echo $row['llcity'] ?>" disabled="disabled"/> </td>
                    <td><label for="">Taluka:</label> </td>
                     <td>   <input type="text" placeholder="taluka" name="taluka"  class="form-control" value="<?php echo $row['lltaluka'] ?>" disabled="disabled"/></td>
                        
                        </tr>
                        
   <tr>
   <td> <label for="">State:</label> </td>
<td><input type="text" placeholder="State" name="state"  class="form-control" value="<?php echo $row['llstate'] ?>" disabled="disabled"/></td>
<td> <label for="">Pin code:</label></td>
<td><input type="text" placeholder="PinCode" name="pincode"  class="form-control" value="<?php echo $row['llpincode'] ?>" disabled="disabled"/></td>
   
   
   </tr>
            
            
            
			 <table>
            <tr>  <td> 	<h3><i class="fa fa-angle-right"></i>Part B:</h3></td></tr>
            <tr>
			<td>
            <div class="form-group">
      <label class="control-label col-sm-8" for="">Vehicle Type</label>
      
            <label for=""> <?php echo $row['vtype'] ?></label>
 	
      </td>
      </tr>     	
            
            	
   			
            <tr>
				<td> <h3><i class="fa fa-angle-right"></i>Part C:</h3></td>
				</tr>
				<tr>
				<td>
				List of enclosures(For age Proof and address proof) 
				</td>
			</tr>
			</table>
			<table class="table">
			<tr>
               
				<th>Document type</th>
                <th>Document File </th>
			</tr>
			<tr>
		 <td align="center">		 
				   <label for=""> <?php echo $row['document1'] ?></label> </td>
		
	<?php  	 echo '<td colspan="2" > <a href="viewdoc.php?id='.$rsid.'">View Document</a>' ?>
				</td>
			</tr>
			
			<tr>
		 <td align="center">
           <label for=""> <?php echo $row['document2'] ?></label>
         </td>
		
					<?php  	 echo '<td colspan="2" > <a href="viewdoc1.php?id='.$rsid.'"> View Document </a>' ?>
				</td>
			</tr>
			
            
            
            
  <tr>
      
			<?php
			 echo '<td colspan="2" > <a href="accept.php?id='.$rsid.'">'?> <input type="submit" name="btnsub" value="Accept" class="formButton" onclick=""/></a>
			
   
   </form>
   
  
   </td>
   <td  colspan="2">
     <?php   echo '<form name="LLform"  method="post" action="reject.php?id='.$rsid.'"> '; ?>
			<?php
			 echo ' <a href="reject.php?id='.$rsid.'">'?> <input type="submit" name="btnsub" value="Reject" class="formButton" onclick=""/></a>
			 </td>
			</tr>
        </table>	    
	

  
</div>
				
				
				
				
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
