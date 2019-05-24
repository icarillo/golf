<section id="heroImg" class="coverBg">
	<h2>Live an unforgetable moment!</h2>
	<img src="assets/wedding1.jpg" alt="Michael and Michel Wedding">
	<a href="?id=3"> Make a Reservation</a>
</section>

<?php
	include("actions/getMainContent.php");
	include("templates/articleLayout.php");
		
	include("actions/getStripPictures.php");
	include("picturesStrip.php");

	include("actions/getSecondaryContent.php");
	include("templates/singleColumnArticle.php");
?>