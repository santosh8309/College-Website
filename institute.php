<!DOCTYPE html>
<html lang="en">
<head>
	<title>About IIITV</title>

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
 
  <div class="institute_page">
      <h3>ABOUT US</h3>
     
      <p style="line-height:normal; text-align: justify;">
                    <font face="verdana, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Indian Institute of Information Technology Vadodara (IIIT-V) is set up by the Ministry of Human Resource Development (MHRD), Government Of India under Public Private Partnership (PPP) model. The partners in this project are Government Of India, Government of Gujarat, Gujarat Energy Research and Management Institute, Gujarat State Fertilizers and Chemicals and Tata Consultancy Services. The Institute was established in the year 2013. DA-IICT Gandhinagar has been entrusted the responsiblity of mentoring IIIT Vadodara. At present, IIIT-V is operating from its temporary premises at Government Engineering College (Gandhinagar) till the time its new campus is made operational at Vadodara, Gujarat.
<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indian Institute of Information Technology, 
                    Vadodara - is established to cater to the emerging 
                    needs and opportunities and meet economic challenges being thrown by the 
                    incessant IT revolution. It is setup as a Not for Profit Public Private 
                    Partnership (PPP) model. It is a major initiative taken by Government of Gujarat 
                    to harness the multifarious dimension of IT Industry. The Government of Gujarat 
                    has lent support to the Institute by providing 50 acres of land and Building. It 
                    is aimed at providing future candidates who shall become a precursor in the 
                    field of IT. A Governing Council consisting of distinguished people from 
                    academia, industry and government preside over the governance of the institute.
                    </font>
                </p>
                <p style="line-height:normal; text-align: justify;">
                    <font face="verdana, sans-serif">&nbsp;</font></p>
                <p style="line-height:normal; text-align: justify;">
                    <font face="verdana, sans-serif">The Institute aims at evolving strong research 
                    programmes in a plethora of areas where IT shall provide a common link with 
                    profound emphasis on development of technology and its application.</font></p>

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