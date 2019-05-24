<?php
$sql="SELECT pages.strMainHeading,pages.strMainContent,pages.strMainImageFile,pages.strMainImageName, pages.strMainTargetPath, pages.strMainBtnName FROM pages WHERE pages.id='".$pageID."'";
$result = Connection::runSQL("getSingleData", $sql);

$articleHeading = $result['strMainHeading'];
$articleText = $result['strMainContent'];
$articleImage = $result['strMainImageFile'];
$articleImageName = $result['strMainImageName'];
$articleTarget = (isset($result['strMainTargetPath']))?$result['strMainTargetPath']:'';
$articleBtn = (isset($result['strMainBtnName']))?$result['strMainBtnName']:'';

?>