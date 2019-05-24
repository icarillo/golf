<section id="gallerySection">
	<div id="galleryContainer" class="container">
		<h2>Gallery</h2>
<?php
include("actions/getPhotos.php");
$arrPhotos = (isset($arrPhotos))?$arrPhotos:"";
$pictures = "";

foreach($arrPhotos as $photosDetails)
{
    $pictures .=
    "<span class='picturesWrap'>
        <div class='pictures coverBg'>
            <a href='assets/".$photosDetails["strFileName"]."' data-fancybox='gallery' data-caption='".$photosDetails["strName"]."'>
                <img src='assets/".$photosDetails["strFileName"]."' alt='".$photosDetails["strName"]."'/>
            </a>
        </div>
    </span>";
}

$picturesContainer = "<div class='picturesContainer'>".$pictures."</div>";

echo $picturesContainer;

?>
	</div>
</section>