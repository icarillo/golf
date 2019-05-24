
<section id="videosSection">
 	<h2>Memories</h2>
	 <div class="videosContainer container">
<?php
include("actions/getVideos.php");
foreach($arrVideos as $videoDetails){
?>
    <div class="videos">
        <h2 class="videoTitle"><?=$videoDetails['strName']?></h2>
        <?=$videoDetails['strFile']?>
    </div>
<?php
}
?>
	</div>
</section>