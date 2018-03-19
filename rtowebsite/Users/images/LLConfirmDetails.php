<?php
include 'Database_Connect.php';

if(isset($_POST['btnsub']))
{
    
        $fname=mysql_real_escape_string($_POST['firstname']);
         $mname=$_POST['middlename'];
          $lname=$_POST['lastname'];
          $gen=$_POST['sex'];
          $dob=$_POST['dob'];
        $age=$_POST['age'];
        $city=$_POST['city'];
        $taluka=$_POST['taluka'];
        $state=$_POST['state'];
        $pincode=$_POST['pincode'];
        $imagename=mysql_real_escape_string($_FILES["image"]["name"]);
        $imagedata= mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
        $imagetype=mysql_real_escape_string($_FILES["image"]["type"]);
        $vehicletype=$_POST['type'];
        $dtype1=$_POST['doc1'];
        $dtype2=$_POST['doc2'];
          $imagedata1= mysql_real_escape_string(file_get_contents($_FILES["image1"]["tmp_name"]));
        $imagetype1=mysql_real_escape_string($_FILES["image1"]["type"]);
        
        
        if(substr($imagetype,0,5) == "image")
        {
            
            echo "Working";
            
        }
        
 else
 {
    echo"Only images are allowed";
 }       
        
        
        
        
        
        
        $qur="Insert into llform (FirstName,MiddleName,LastName,Gender,Age,DOB,llcity,lltaluka,llstate,llpincode,image,vtype,document1,document2,image2,Status,Application_id) VALUES('$fname','$mname','$lname','$gen','$age','$dob','$city','$taluka','$state','$pincode','$imagedata','$vehicletype','$dtype1','$dtype2','$imagedata1','In Progress','".uniqid('MH',FALSE)."')";
        $ret=mysql_query($qur,$conn);
if(!$ret)
{
    
?>

<script>
alert("Not register ");
//onClick="document.location.href='userindex.php?page=Home'"
</script>
<?php





}
else
{
	?>
	<script>
	alert("Thank you!Your Application is Submitted");
	//header("Location:Home.php");

	</script>
		
	<?php
	header("Location:Home.php");
}
        
}
else
{
    
    header("Location:userindex.php?page=Home");

}



?>

<div style="font-family: sans-serif;font-weight: bold;color: #9AD035;alignment-adjust:central;font-size: 50px;position: relative;left:350px">Thank You! <br />
 </div> <div style="position:relative;left:390px;"><img src="pages/Resources/Images/good_or_tick.png"/> </div>
<div id='thank'style="position:relative;left:320px;color:#473F52;font-family: serif;font-weight: bold;font-size:25px;" > Your Application has been submited
<br /> 
<br/>
<a href="userindex.php?page=home" style="text-decoration: none;"><input type="submit" value="OK" style="height: 40px; width:240px;position:relative;left:50px ;" /></a></div> 