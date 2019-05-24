<?php

$sql = "SELECT 
		id,
		strName,
		nTemplatesID,
		bMainPage,
		strParentPage,
		strMainHeading,
		strMainContent,
		strMainImageFile,
		strMainImageName,
		strMainBtnName,
		strMainTargetPath,
		strSecondaryHeading,
		strSecondaryContent,
		strSecondaryImageFile,
		strSecondaryImageName,
		strSecondaryBtnName,
		strSecondaryTargetPath,
		strPictureStrip1,
		strPictureStrip2,
		strPictureStrip3
	FROM pages	WHERE id=9";
$arrPageDetails = Connection::runSQL('getSingleData' , $sql);

?>