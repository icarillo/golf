<?php
include("../../functions/dbqueries.php");// include the db functions here, than I can use it in every page
$pageID = (isset($_GET["id"])?$_GET["id"]:9);

include("partials/header.php");

include("actions/getTemplateToShow.php");

if(file_exists("templates/".$arrPageContent["strTemplateLocation"]))
{
	include("templates/".$arrPageContent["strTemplateLocation"]);
} else {
	echo "uhoh... no file found at: templates/". $arrPageContent['strTemplateLocation'];
}

include("partials/footer.php");
?>