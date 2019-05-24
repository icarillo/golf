<?php
$sql="SELECT pages.strSecondaryHeading,pages.strSecondaryContent,pages.strSecondaryImageFile,pages.strSecondaryImageName, pages.strSecondaryTargetPath, pages.strSecondaryBtnName FROM pages WHERE pages.id='".$pageID."'";
$result = Connection::runSQL("getSingleData", $sql);

$articleHeading = $result['strSecondaryHeading'];
$articleText = $result['strSecondaryContent'];
$articleImage = $result['strSecondaryImageFile'];
$articleImageName = $result['strSecondaryImageName'];
$articleTarget = (isset($result['strSecondaryTargetPath']))?$result['strSecondaryTargetPath']:'';
$articleBtn = (isset($result['strSecondaryBtnName']))?$result['strSecondaryBtnName']:'';
?>