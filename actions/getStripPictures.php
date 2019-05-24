<?php
$sql = "SELECT pages.strPictureStrip1, pages.strPictureStrip2, pages.strPictureStrip3 FROM pages WHERE pages.id =".$pageID;
$arrStripPictures = Connection::runSQL("getSingleData", $sql);
?>