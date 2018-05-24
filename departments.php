<!DOCTYPE html>
<html lang="en">
<head>
	<title>Department</title>

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

  <br>
<br>
		<div class="col-t1">
        <h3><center><span class="highlight">B.Tech (CSE)</span></center></h3>
        <div class="col-c">
            <p>
			<div id="itcenter">
               The programme is designed to make a strong foundation in CSE that includes 
                electronics and hardware. Computer science courses <br>are introduced in the early 
                semesters while non-IT courses in the later stages. IT workshops are specially 
                designed courses allowing </br>the students to have mastery in the use of the latest 
                software technologies. The courses in mathematics, sciences, engineering and 
                humanities enable students to explore the wider applications of technology.
			</div>	
			</p>
               
        </div>
      </div>
		
		
		
		<div class="col-t1">
        <h3><center><span class="highlight">B.Tech&nbsp;&nbsp;&nbsp;&nbsp; (IT)</span></center></h3>
        <div class="col-c">
            <p>
              
				<div id="itcenter">
			Software engineering is a form of engineering that applies principles of
			  computer science  and mathematics to achieve cost-effective solutions to
			  software problems. The software engineering curriculum places primary emphasis 
			  on the technical aspects of &nbsp;&nbsp; building <br>and modifying high quality software system.
			  This programme is the designed to forge a strong linkage with the IT Industry, which 
			  will</br> take up the research and development projects for the industry and play a key
			  role in the developing ICT applications for the  masses.
              </div>
			</p>
               
       </div>
      </div>
	  

 
<footer class="footer-distributed">

			<div class="footer-left">

				<!--h3>IIIT<span>Vadodara</span></h3-->

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