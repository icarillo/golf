<?php
$sql = "SELECT * FROM adminPages";
$arrPages = runSQL("getAllData",$sql);
$sql = "SELECT * FROM globals";
$arrGlogals = runSQL("getAllData",$sql);
?>
<nav id="dashboardNav">
    <ul>
<?php
	foreach($arrPages as $page)
	{
		
		$activeState = "active";
		if($page['id'] != $pageID){
			$activeState = "";
		}
?>
		<li>
			<a href="adminDashboard.php?id=<?=$page['id']?>" class="<?=$activeState?>"><?=$page['strName']?></a>
		</li>
<?php
	}
?>
    </ul>
</nav>
