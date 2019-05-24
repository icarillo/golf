<?php
include("../functions/dbqueries.php");
$sql='
UPDATE
	pages
SET	
	strName = "'.$_POST['strName'].'",
	strMainHeading = "'.$_POST['strMainHeading'].'",
	strMainContent = "'.$_POST['strMainContent'].'",
	strSecondaryHeading = "'.$_POST['strSecondaryHeading'].'",
	strSecondaryContent = "'.$_POST['strSecondaryContent'].'"
WHERE
	pages.id ="'.$_GET['nPageID'].'"';
$update = runSQL("insertNew", $sql);
//echo "<p>works</p>";
?>
<?php
//// here I have my uploaded files inside an array, we can access the details using $arrUploadedImages[info], where info can be: 'name','type','tmp_name','error' or 'size'....
//$arrUploadedImages = $_FILES['strFileName'];
////here I set the name of the folder where I will save my uploaded files
//$targetDirectory = "assets";
////here I create a variable to my sql for upload the files
//$sqlToImages = "";
////because I have more than one file they come as
////Array ( 
////	[name] => Array ( 
////			[0] => nameFile1,
////			[1] => nameFile2),
////	[type] => Array ( 
////			[0] => typeFile1,
////			[1] => typeFile2),
////	[tmp_name] => Array ( 
////			[0] => tmp_nameFile1,
////			[1] => tmp_nameFile2), 
////	[error] => Array (
////			[0] => errorFile1,
////			[1] => errorFile2), 
////	[size] => Array ( 
////			[0] => sizeFile1, 
////			[1] => sizeFile2) 
////)
////it means that to access the name for the each file I nedd to say $arrUploadedImages['name'][fileIndex]
////now I can make a while to save each file in my directory in the server
//
//$i = 0;
//while($i<count($arrUploadedImages['name'])){
//    print_r($arrUploadedImages['name'][$i]);
//	echo "<hr>";
//	$serverLocationAndName = $targetDirectory."/".$arrUploadedImages['name'][$i];
//	move_uploaded_file($arrUploadedImages['tmp_name'][$i], $serverLocationAndName);
//    $i++;
//	$sqlToImages .= "UPDATE
//	images
//SET
//	images.strName ='".$arrUploadedImages['name'][$i]."'
//WHERE
//	images.id = (SELECT nImageID FROM page_images WHERE nPageID='".$_GET['id']."');";
//	
//};

?>
