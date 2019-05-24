<section class="verticalArticle">
<?php
	if(!empty($articleImage)){
?>
	<span class="artcImgWrap">
		<div class="articleImg coverBg">
			<img src="assets/<?=$articleImage?>" alt="<?=$articleImageName?>"/>
		</div>
	</span>
<?php 
	} 
?>
	<div class="container articleText">
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
</section>