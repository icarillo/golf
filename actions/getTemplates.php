<?php
$sql = "SELECT id, strName FROM templates";
$arrTemplates = Connection::runSQL("getAllData", $sql);
?>