<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admission</title>

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
 
  <div class="admission_page">
  
      
         <h3>PG ADMISSIONS</h3>
   <p style="text-align: justify" >
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sensing the need of post-graduate program to develop a strong research environment at Indian Institute of Information Technology, Vadodara, the governing bodies of the institute have decided to begin with two Post Graduate programs: Master of Technology in Computer Science & Engineering and a Doctoral program from Year 2016-17.  
<br>
<b> M.Tech. in Computer Science & Engineering </b> program is designed such that the students can complete it based on advanced coursework along with minor and a major project. The students interested to pursue a research oriented career are provided with an option to take up thesis work for a year in place of projects.
<br>
<b> Doctoral Program </b> is intended for students who wish to conduct, manage or interpret research in academic, industry or government settings.  This degree certifies credible completion of an approved program of advanced study in addition to a research thesis of high quality based on original research.   Program comprises of one-two semester of intensive course work followed by minimum of two-three years of research. Students are expected to demonstrate excellence in research area via quality publications in reputed journals and conferences. 
<br>
For further details about the programs and application process, visit us at <a href="http://pgadmissions.iiitvadodara.ac.in" target="_blank">PG-Admissions-Portal</a>
<br>
For any queries related to admission process or to know the status of your application, kindly contact us at :  <span style="font-size: 12px; font-weight: bold;color:Black">pgadmissions@iiitvadodara.ac.in</span> </p>
        <h3>UG ADMISSIONS</h3>
            <p style="text-align: justify" >
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Admissions to the four year B.Tech. Program in both the branches (IT & CSE) of the Institute is made through the examination conducted by CBSE under the name and style of JEE (Main). Official Notification of this examination is given wide publicity through national dailies during September-December every year. The examination is scheduled usually in May the following year and held at several centers spread over the entire length and breadth of the country. Based upon the merit in the written examination, Central Counseling Board of JEE (Main) invites candidates for counseling at selected centers and seats for various participating institutions are allotted, based upon individual merit.


Details about cutoffs are available at <a href="http://www.csab.nic.in" target="_blank">CSAB Web</a>.
                For any queries or details related to admissions, contact us at: <span style="font-size: 12px; font-weight: bold;color:Black"><a href="#">admission@iiitvadodara.ac.in</a></span> </p>
      

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