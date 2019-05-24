<?php

$sql="SELECT 
		id,
		strName AS 'Name',
		strFileName AS 'Photo'
	FROM 
		images";
$arrPhotos = Connection::runSQL("getAllData", $sql);

?>