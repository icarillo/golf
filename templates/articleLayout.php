<section class="container horizontalArticle">
	<div class="articleText">
		<h2><?=$articleHeading?></h2>
		<p><?=nl2br($articleText)?></p>
<?php
	if(!empty($articleBtn)){
?>
		<a class="btn" href="<?=$articleTarget?>"><?=$articleBtn?></a>
<?php 
	} 
?>
	</div>
	<span class="artcImgWrap">
		<div class="articleImg coverBg">
			<img src="assets/<?=$articleImage?>" alt="<?=$articleImageName?>"/>
		</div>
	</span>
</section>