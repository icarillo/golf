<?php
include("../../../functions/dbqueries.php");
session_start();
$sql = "SELECT * FROM users WHERE strName='".$_POST['strUsername']."'";
$arrMyUser = Connection::runSQL("getSingleData", $sql);
if ($_POST['strpassword'] == $arrMyUser['strpassword'])
{
    $_SESSION["userID"]=$arrMyUser['id'];
	header("location: ../admin/adminDashboard.php");
}
else
{
    header("location: ../admin/index.php");
}
?>