<?php
$title="VanArts Student Mock Project Site";
$companyName="Beautiful View Landscaping Company"; //The company name is defined here then we can use in every page that have a header

?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon-16x16.png"><!-- this include our fav icon -->
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet"><!-- this link our fonts from googlefonts to the page -->
	<link rel="stylesheet" href="css/adminStyle.css"><!-- this include our css style for the pagse -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" /> <!-- link to use fancybox -->
	<meta name="viewport" content="width=device-width,initial-scale=1"><!-- this allow us to use media query and make the page responsive -->
</head>
<body>
	<header id="adminHeader"><!-- header -->
		<div class="container"> <!-- this div is for fit our header content inside the container --->
			<h1 class="logo"><!-- here we will sprite the name of the company and show the logo as a background of this element -->
				<a  href="index.php"><?=$companyName?></a> <!-- this text is indented as -999999px to sprite out of the page and be showed in case we don`t have a css working -->
			</h1>
		</div><!-- closing div container -->
	</header><!-- clonsing header -->