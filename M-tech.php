<!DOCTYPE html>
<html lang="en">
<head>
	<title>M.Tech</title>

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
  <h3><center><span class="highlight">M.Tech (CSE)</span></center></h3>
        <div class="col-c">
            <p>
			<div id="itcenter">
              <b><br> M.Tech. in Computer Science &amp; Engineering </b>program is designed such that the students can complete it based on advanced </br>coursework along with minor and a major project. The students interested to pursue a research oriented career are provided with an option to take up thesis work for a year in place of projects.
<br>
The first semester of program is aimed at laying down the foundations necessary for the computer science discipline. It gives students an opportunity to tune into the instructional philosophy and pedagogy of learning at IIIT, Vadodara. Subsequent semesters provide avenues for specializing in one or more areas of computer science such as:
<br>
<b>(a) Computer Vision, Graphics and Multimedia</b>
<br>
The fields of graphics, vision and imaging increasingly rely on one another. This specialization provides training in computer graphics, computer vision, geometric processing and multimedia, enabling students to specialize in any of these areas and gain a grounding in the others.
<br>
Graduates will learn the basic mathematical principles underlying the development and application of new techniques in computer graphics and computer vision and will be aware of the range of algorithms and approaches available, and be able to design, develop and evaluate algorithms and methods for new problems, emerging technologies and applications.
<br>
<b>(b) Data Analytics</b>
<br>
It is an interdisciplinary specialization designed to meet the huge manpower shortage in the area of data analytics. The specialization trains students in computational techniques and systems to draw insights from data in a variety of application domains.
<br>
<b>(c) Signal and Information Processing</b>
<br>
The program has been specially designed to meet the increasing need of professionals who would be able to respond to the needs of modern day signal and data processing/analysis tasks. It is meant for students who wish to build a professional career oriented towards research and development, working at the cutting edge of technology in the area of Signal and Information Processing. The curriculum is developed keeping in view the convergence of signal and information processing paradigm with data analytics. It is a step forward towards data processing and analysis for signal processing background students.
<br>               
   
				</div>
          <p>&nbsp;</p>
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