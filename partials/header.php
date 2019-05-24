<?php
$title="VanArts Student Mock Project Site";
$companyName="Elsing Golf Course"; //The company name is defined here then we can use in every page that have a header

?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png"><!-- this include our fav icon -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i|Tangerine:400,700" rel="stylesheet"><!-- this link our fonts from googlefonts to the page -->
	<link rel="stylesheet" href="css/style.css"><!-- this include our css style for the pagse -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" /> <!-- link to use fancybox -->
	<meta name="viewport" content="width=device-width,initial-scale=1"><!-- this allow us to use media query and make the page responsive -->
</head>
<body>
	<header><!-- header -->
		<div class="container"> <!-- this div is for fit our header content inside the container --->
			<h1 class="logo"><!-- here we will sprite the name of the company and show the logo as a background of this element -->
				<a  href="index.php"><?=$companyName?></a> <!-- this text is indented as -999999px to sprite out of the page and be showed in case we don`t have a css working -->
			</h1>
<?php 
	include("nav.php");// the nav elements come from the nav inside the partials folder (same folder of this file)
?>
			<div id="socialMedia"> <!-- here we will have the icons for social medias -->			
			    <span id="facebookIcon" class="socialSprite"><a href="#">Facebook</a></span>
			    <span id="twitterIcon" class="socialSprite"><a href="#">Twitter</a></span>
			    <span id="instagramIcon" class="socialSprite"><a href="#">Instagram</a></span>
			</div><!--- closing div for social icons -->
		</div><!-- closing div container -->
		<div class="coverBg" id="hamburguer">
		    <img src="assets/hamburguer.png" alt="hamburguer menu"/>
		</div>
	</header><!-- clonsing header -->