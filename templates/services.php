<?php
include("actions/getMainContent.php");
include("singleColumnArticle.php");
?>
<div id="subCategoryBtn">
<?php
	foreach($arrSubPages as $subPages){
		if(isset($pageName) && $subPages['strParentPage']==$pageName){
?>
	<a href="?id=<?=$subPages['id']?>" class="btn"><?=$subPages['strName']?></a>
<?php
		}
	}
?>
</div>
<?php
include("actions/getStripPictures.php");
include("picturesStrip.php");
include("actions/getSecondaryContent.php");
include("articleLayout.php");
?>