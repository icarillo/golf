<?php

$sql = "SELECT pages.*, templates.strTemplateLocation FROM pages LEFT JOIN templates ON templates.id=pages.nTemplatesID WHERE pages.id='".$pageID."'";
$arrPageContent = Connection::runSQL("getSingleData", $sql);

?>