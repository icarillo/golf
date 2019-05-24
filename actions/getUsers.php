<?php
$sql= "SELECT 
            id,
            strName AS 'Name'
        FROM 
            users
		ORDER BY
			id";
$arrContacts = Connection::runSQL("getAllData", $sql);
?>