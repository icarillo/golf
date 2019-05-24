<?php

include("../functions/dbqueries.php");

$sql = "DELETE FROM ".$_POST["tableName"]." WHERE id='".$_POST["id"]."'";
runSQL("delete", $sql);

$deleteTable = $_POST["tableName"];
$returnPage = $_POST["returnPage"];
include($returnPage);
include("makeTable.php");

?>