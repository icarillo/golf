
	<footer><!-- footer -->
		<div class="container"><!-- div container -->
		    <h1 class="logo"><!-- here we will sprite the name of the company and show the logo as a background of this element --> 
				<a  href="index.php"><?=$companyName?></a> <!-- this text is indented as -999999px to sprite out of the page and be showed in case we don`t have a css working -->
			</h1>
			<!-- footer nav -->
<?php 
include("nav.php");
?>
			<!-- closing footer nav -->
			<p id="design"> <!-- copyright -->
			    Design by &Iacute;talo<br/>
			    &copy; Copyright 2018
            </p><!-- end of copyright -->
		</div><!-- closing container -->
	</footer><!-- closing footer --> 
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> <!-- including script for media query -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script> <!-- script to use fancybox -->
	<script src="js/jquery.js"></script><!-- script to my slider -->
	<script src="js/formValidation.js"></script><!-- script to validate a form -->
	<script src="js/hambMenu.js"></script><!-- script to hamburger menu -->
	<script src="js/makeCoverBg.js"></script><!-- script to tour cardSlider -->
	<script src="js/initMapFunction.js"></script><!-- script to set my albuns background -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMaFf1MASfiqfZ74bRkaGWKbeEIcUIVOU&callback=initMap"></script><!--map script from API -->
</body>
</html>
