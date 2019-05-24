<?php
include("../../../functions/dbqueries.php");// include the db functions here, than I can use it in every page
include("../actions/verifyUser.php");
include("partials/dashboardHeader.php");
$pageID = (isset($_GET["id"])?$_GET["id"]:1);
include("warningBoxes.php");
//include("partials/dashboardNav.php");
include("adminTemplates/newPageForm.php");
//$sql = "SELECT adminPages.strURL FROM adminPages WHERE adminPages.id='".$pageID."'";
//$arrPageContent = runSQL("getSingleData", $sql);
//if(file_exists("adminTemplates/".$arrPageContent["strURL"]))
//{
//	include("adminTemplates/".$arrPageContent["strURL"]);
//} else {
//	echo "uhoh... no file found at: ".$arrPageContent['strURL'];
//}
include("partials/dashboardFooter.php");
?>