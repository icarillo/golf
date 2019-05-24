<section class="picturesStrip">
<?php 
	foreach($arrStripPictures as $stripPicture){
?>
	<span class='stripPicturesWrap'>
		<div class="pictures coverBg">
			<a href='assets/<?=$stripPicture?>' data-fancybox='gallery' data-caption='ilustrative picture'>
				<img src="assets/<?=$stripPicture?>" alt="ilustrative picture">
			</a>
		</div>
	</span>
<?php
	}
?>
</section>