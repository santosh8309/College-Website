<!DOCTYPE html>
<html lang="en">
<head>
	<title>View of student</title>

    <meta http-equiv="Content-Language" content="hi">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <link href="college.css" rel="stylesheet" type="text/css">
    <link href="nav.css" rel="stylesheet" type="text/css">
    <link href="generic.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <!--link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js-image-slider.js" type="text/javascript"></script-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    </head>
<style>
.mySlides {display:none;}
</style>   
    <style>
.a {display:none;}
</style> 
<body>  

   <div id="wrapper">
    
       <?php 
include_once("header.php");
?>
 
          
<div id="fee_table"> 

<table class="table">
    <form name="form1" method="post" onSubmit="return validate();">
<?php

$branch=$_POST["branch"];
$batch=$_POST["batch"];


$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sandeep";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$sql="SELECT * FROM student where branch='$branch' AND batch='$batch'";
$result=mysqli_query($connection,$sql);
$count=mysqli_num_rows($result);
?>
    
<script language="javascript">
function validate()
{
var chks = document.getElementsByName('checkbox[]');
var hasChecked = false;
for (var i = 0; i < chks.length; i++)
{
if (chks[i].checked)
{
hasChecked = true;
break;
}
}
if (hasChecked == false)
{
alert("Please select at least one.");
return false;
}
return true;
}
</script>
    
    <tr>
    <th class="th">s_no.</th>
        <th class="th">Student Name</th>
    <th class="th">Student ID</th>
    <th class="th">Branch</th>
      <th class="th">Batch</th>
    
  </tr>

<?php
while($rows=mysqli_fetch_array($result)){
?>

<tr>
<td class="td"><input name="checkbox[]" type="checkbox" id="checkbox[]" 
value="<?php echo $rows['s_id']; ?>"></td>
<td class="td"><?php echo $rows['s_id']; ?></td>
<td class="td"><?php echo $rows['name']; ?></td>
<td class="td"><?php echo $rows['branch']; ?></td>
<td class="td"><?php echo $rows['batch']; ?></td>
</tr>

<?php
}
?>

<br>
<input name="delete" type="submit" id="delete" value="Add student in alumni">&nbsp;&nbsp;&nbsp;
        <input name="delete1" type="submit" id="delete1" value="Delete student">&nbsp;&nbsp;&nbsp;
        <a href="form.php" target="_blank">Add student</a>&nbsp;&nbsp;&nbsp;
        <a href="database_photo/index.php" target="_blank">Add faculty</a>
        <br>


<?php



// Check if delete button active, start this
if(isset($_POST['delete'])){

for($i=0;$i<count($_POST['checkbox']);$i++){
$student_id=$_POST['checkbox'][$i];
$sql="select * from student where s_id='$student_id'";
$result=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($result)){   
    $s_name=$row["name"];
$student_id=$row["s_id"];
$s_branch=$row["branch"];
    $s_batch=$row["batch"];
    
}

$sql = "DELETE FROM student WHERE s_id='$student_id'";
if (mysqli_query($connection, $sql)) {
  //  echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}

    
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sandeep";
$connection1=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno()){
    echo"error";
}else{

//echo"connect";
}


$sql = "INSERT INTO alumni (s_name,student_id,s_branch,s_batch)
VALUE ('$s_name','$student_id','$s_branch','$s_batch')";
mysqli_query($connection1,$sql);

    

}
//include('cs_it_admin.php');
}else{

if(isset($_POST['delete1'])){
for($i=0;$i<count($_POST['checkbox']);$i++){
$student_id=$_POST['checkbox'][$i];
$sql = "DELETE FROM student WHERE s_id='$student_id'";
 
}
    if (mysqli_query($connection, $sql)) {
    //echo "Record deleted successfully";
echo '<script type="text/javascript">alert("Student successfully deleted!");</script>';
        //include("admin_show_student.php");
    }
    
}
}

//mysql_close();
?>
<!--/table-->
</form>
<!--/td>
</tr-->
</table>

</div>


    
    
    
<footer class="footer-distributed">

			<div class="footer-left">

				<!---h3>IIIT<span>Vadodara</span></h3-->

				<p class="footer-links">
					Block No.9, Government Engineering College, Sector-28, Gandhinagar,Gujarat-382028
				</p>

				<!--p class="footer-company-name">Company Name &copy; 2015</p-->
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
                    <p><span>How to reach</span><a href="google_map.php" target="_blank">IIITV</a></p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>(+91) 079-29750281</p>
				</div>

				<!--div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">iiitvadodara.ac.in</a></p>
				</div-->

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the iiitv</span>
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>



    </div><!--- wraper-->
 
<script type="text/javascript">
    jQuery(document).ready(function($) {
    "use strict";

    //Sticky Navigation
    if ($('#menu').length) {
        // grab the initial top offset of the navigation
        var stickyNavTop = $('#menu').offset().top;
        // our function that decides weather the navigation bar should have "fixed" css position or not.
        var stickyNav = function() {
            var scrollTop = $(window).scrollTop(); // our current vertical position from the top
            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
            // otherwise change it back to relative
            if (scrollTop > stickyNavTop) {
                $('#menu').addClass('cp_sticky');
            } else {
                $('#menu').removeClass('cp_sticky');
            }
        };
        stickyNav();
        // and run it again every time you scroll
        $(window).scroll(function() {
            stickyNav();
        });
    }
});
</script>


</body>
</html>