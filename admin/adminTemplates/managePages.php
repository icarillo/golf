<section id="adminManagePages" class="adminManageArea">
	<div class="myContent">
	<?php
	include("../actions/getPages.php");
	$deleteTable = "pages";
	$returnPage = "getPages.php";
	include("../actions/makeTable.php");
	?>
	</div>
</section>