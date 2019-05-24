<?php
include("../functions/dbqueries.php");
$error = ($_POST["strName"] && $_POST["strpassword"])?false:true;
if($error == false){
	$sql = "INSERT INTO users(
				strName,
				strpassword
			)
			VALUES(
				'".$_POST["strName"]."',
				'".password_hash($_POST["strpassword"], PASSWORD_DEFAULT)."')";

	Connection::runSQL("insertNew",$sql);
	include("getUsers.php");
	$deleteTable = "users";
	$returnPage = "getUsers.php";
	include("makeTable.php");
}
else{
	echo false;
}

?>