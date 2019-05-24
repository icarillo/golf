<section class="adminManageArea">
	<div class="adminForm">
<?php
include("userForm.php");
?>
	</div>
	<div class="myContent">
<?php
include("../actions/getUsers.php");
$deleteTable = "users";
$returnPage = "getUsers.php";
include("../actions/makeTable.php");
?>
	</div>
</section>