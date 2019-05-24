<?php
$sql="SELECT * FROM videos";
$arrVideos = Connection::runSQL("getAllData", $sql);
?>