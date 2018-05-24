<!DOCTYPE html>
<html lang="en">
<head>
	<title>Director_message</title>

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
 
    
  <div class="director_message_page">
 <p>
<br><img id="ContentPlaceHolder1_Image1" Hight="184px" src="image_photo/Professor-R-Nagaraj.jpg" style="width:157px;" /><br>
                <b>Dr. R Nagaraj</b><br>
<b>Director DA-IICT,</b><br>
<b>Mentor Director, IIITV</b><br><br></P>
<p style="line-height:normal; text-align: justify;">
Dr. R Nagaraj obtained his PhD from Visvesvaraya Technological University in the field of Fault Tolerant Flight Controllers using Artificial Neural Network (ANN). His areas of interest include fault tolerant control, Non linear control systems, neural networks and reconfigurable control systems. Dr. Nagaraj has twenty five years of experience in research, teaching and academic administration. Prior to joining DA-IICT, he was the Principal of The Oxford College of Engineering; Bangalore where he held positions of Vice-Principal, Professor and Head of the Department of Electronics & Communication Engineering. He was the national merit scholar and received academic excellence award from RSST and mentorship award from RV VLSI Design Center, Bangalore. Dr. Nagaraj is IEEE Senior Member, Life Member of Institution of Electronics & Telecommunication Engineers, and Indian Society for Technical Education and Computer Society of India.<br><br>

<b>Director's Message</b><br><br>

<i>“I can't change the direction of the wind, but I can adjust my sails to always reach the destination.”</i><br>
                                                                                                                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    -Jimmy Dean<br><br>

You have infinite potential. Your attitude can make or break you, so turn your attitude into one of gratitude, faith, trust, and above all optimism. A warm welcome to IIIT, Vadodara.
Current environment is characterized by the need to constantly innovate and to reinvent oneself in order to sustain and grow one's stature in the industry. We, at IIITV believe that today's engineers need to inculcate in them the quality to adapt to the changing environment and to possess an action oriented approach. The primary goal of IIITV is to provide an environment that helps our students - future engineers and leaders of the country - to realize their potential in full. Along with expertise in core subject knowledge we aim to improve their communication skills, critical thinking abilities, problem solving skills, creativity,  moral values and sense of responsibility. Our educational and training programmes are anchored around the same philosophy.
Though still at its nascent stage, IIITV has started fostering a vision of becoming a leading Institution of the country. As an institute, we are committed towards creating a community which is vibrant and provides a lifetime learning experience both professionally and personally.
</p>
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