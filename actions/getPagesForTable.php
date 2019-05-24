<?php
$sql = "SELECT
			id,
			strName AS 'Page Name',
			strMainHeading AS 'Main Headind',
			strSecondaryHeading AS 'Secondary Heading',
			(SELECT strName FROM templates WHERE templates.id=pages.nTemplatesID) AS 'Template'
		FROM 
			pages";
$arrPages = Connection::runSQL("getAllData", $sql);
?>