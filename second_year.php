<!DOCTYPE html>
<html lang="en">
<head>
	<title>Second year student</title>

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

     
<h4 align="center">Second year students</h4>
    
<div id="fee_table"> 
<table class="table">
  <tr>
    <th class="th">Student Name</th>
    <th class="th">Student ID</th>
    <th class="th">Branch</th>
      <th class="th">Batch</th>
    
  </tr>
    
    <?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="sandeep";
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$result=mysqli_query($connection,"select * from student where batch='2015-16' order by s_id");
while($row=mysqli_fetch_array($result)){
?>
    
    
   <tr>
     <td class="td"><?php echo $row["name"]?></td>
     <td class="td"><?php echo $row["s_id"]?></td>
     <td class="td"><?php echo $row["branch"]?></td>
       <td class="td"><?php echo $row["batch"]?></td>
    
   </tr>
    <?php } ?>
  
    </table>
    <a href="first_year.php">List of first year students</a><br>
    <a href="second_year.php">List of second year students</a><br>
    <a href="third_year.php">List of third year students</a><br>
    <a href="forth_year.php">List of forth year students</a><br>
  </div>
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>IIIT<span>Vadodara</span></h3>

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