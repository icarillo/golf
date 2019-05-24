<?php
include("../actions/getUsers.php");


$arrProtectedIDS = [35];
$deleteTable = 'users';
$returnPage = 'getUsers.php';

include("../actions/makeTable.php");
?>