<?php

$newPage = true;
$arrPageDetails = '';

//creating a var to use in include above
include('../actions/getPagesForForm.php');

           
//Here we rename the columns to use in the form as a nive name.... thinking about UX ;D
$arrColumnsNames = array(
		'id' => 'id',
		'strName' => 'Page name',
		'nTemplatesID' => 'Template',
		'bMainPage' => 'Main Page',
		'strParentPage' => 'Parent page name',
		'strMainHeading' => 'Main heading',
		'strMainContent' => 'Main content',
		'strMainImageFile' => 'Main image',
		'strMainImageName' => 'Main image name',
		'strMainBtnName' => 'Main CTA button name',
		'strMainTargetPath' => 'Main CTA button target',
		'strSecondaryHeading' => 'Secondary heading',
		'strSecondaryContent' => 'Secondary content',
		'strSecondaryImageFile' => 'Secondary image',
		'strSecondaryImageName' => 'Secondary image name',
		'strSecondaryBtnName' => 'Secondary CTA button name',
		'strSecondaryTargetPath' => 'Secondary CTA button target',
		'strPictureStrip1' => 'First photo for strip',
		'strPictureStrip2' => 'Second photo for strip',
		'strPictureStrip3' => 'Third photo for strip'
);

// here we define wich type of field will be crated for each column
$arrInputText = [
	'Page name', 
	'Parent page name', 
	'Main heading', 
	'Main image name',
	'Main CTA button name',
	'Main CTA button target', 
	'Secondary heading',
	'Secondary image name',
	'Secondary CTA button name',
	'Secondary CTA button target'	
];

$arrInpuCheckBox = [
	'Main Page'
];

$arrSelect = [
	'Template'
];

$arrFile = [
	'Main image',
	'Secondary image',
	'First photo for strip',
	'Second photo for strip',
	'Third photo for strip'
];

$arrTextArea = [
    'Main content',
    'Secondary content'
];
//Here we start to build our form creating a field FOREACH column in the table
?>

<form id="pagesForm" method="POST" action="actions/savePage.php" onSubmit="return validate()"><!-- open the form -->
        <label>Page name:</label>
		<input  id='strName' name='strName' type="text" value="<?=$arrPageDetails['strName']?>"/>
		
		<select id='nTemplatesID' name='nTemplatesID'>
<?php
		include("../actions/getTemplates.php");
		foreach($arrTemplates as $templateDetails){
			$selected = ($arrPageDetails['nTemplatesID'] == $templateDetails['id'])?'selected':'';
?>
			<option value='<?=$templateDetails['id']?>' <?=$selected?>><?=$templateDetails['strName']?></option>
<?php 
		}
?>
		</select>
<?php
        $checked = ($arrPageDetails['bMainPage']==1)?'checked':'';
?>
		<input  id='bMainPage' name='bMainPage' type="checkbox" value="1" <?=$checked?>/>Main Page
<?php
    if($arrPageDetails['bMainPage']==0){
?>
		<label>Parent page name:</label>
        <select id='strParentPage' name='strParentPage'>
<?php
            include("../actions/getPagesForNav.php");
            foreach($arrPages as $page){
                $selected = ($page['strParentPage'] == $arrPageDetails['strParentPage'])?'selected':'';
?>
			    <option value='<?=$page['id']?>' <?=$selected?>><?=$page['strName']?></option>
<?php 
            }
        }
?>
		</select>
		
		<label>Main heading:</label>
		<input  id='strMainHeading' name='strMainHeading' type="text" value="<?=$arrPageDetails['strMainHeading']?>"/>

	    <label>Main content image:</label>	
    	<input id='strMainImageFile' type="file" name='strMainImageFile' value="<?=$arrPageDetails['strMainImageFile']?>">
    	<div class='coverBg pageFormImages' >
		    <img width='200' src="../assets/<?=$arrPageDetails['strMainImageFile']?>" alt="default">
	    </div>	    
		<label>Main image name:</label>
		<input  id='strMainImageName' name='strMainImageName' type="text" value="<?=$arrPageDetails['strMainImageName']?>"/>
		
		<label>Main CTA button name:</label>
		<input  id='strMainBtnName' name='strMainBtnName' type="text" value="<?=$arrPageDetails['strMainBtnName']?>"/>
		<label>Main CTA button target:</label>
		<input  id='strMainTargetPath' name='strMainTargetPath' type="text" value="<?=$arrPageDetails['strMainTargetPath']?>"/>
		<label>Secondary heading:</label>
		<input  id='strSecondaryHeading' name='strSecondaryHeading' type="text" value="<?=$arrPageDetails['strSecondaryHeading']?>"/>
<?php
    if(1==1){
?>
	    <label>Secondary content image:</label>	
    	<input id='strSecondaryImageFile' type="file" name='strSecondaryImageFile' value="<?=$arrPageDetails['strSecondaryImageFile']?>">
    	<div class='coverBg pageFormImages' >
		    <img width='200' src="../assets/<?=$arrPageDetails['strSecondaryImageFile']?>" alt="default">
	    </div>	    
		<label>Secondary image name:</label>
		<input  id='strSecondaryImageName' name='strSecondaryImageName' type="text" value="<?=$arrPageDetails['strSecondaryImageName']?>"/>
<?php
    }
?>
    <label>Secondary CTA button name:</label>
    <input  id='strSecondaryBtnName' name='strSecondaryBtnName' type="text" value="<?=$arrPageDetails['strSecondaryBtnName']?>"/>
    <label>Secondary CTA button target:</label>
    <input  id='strSecondaryTargetPath' name='strSecondaryTargetPath' type="text" value="<?=$arrPageDetails['strSecondaryTargetPath']?>"/>
		
	<input id='strPictureStrip1' type="file" name='strPictureStrip1' value='<?=$arrPageDetails['strPictureStrip1']?>'>
	<div class='coverBg pageFormImages' >
		<img width='200' src="../assets/<?=$arrPageDetails['strPictureStrip1']?>" alt="default">
	</div>
	<input id='strPictureStrip2' type="file" name='strPictureStrip2' value='<?=$arrPageDetails['strPictureStrip2']?>'>
	<div class='coverBg pageFormImages' >
		<img width='200' src="../assets/<?=$arrPageDetails['strPictureStrip2']?>" alt="default">
	</div>
	<input id='strPictureStrip3' type="file" name='strPictureStrip3' value='<?=$arrPageDetails['strPictureStrip3']?>'>
	<div class='coverBg pageFormImages' >
		<img width='200' src="../assets/<?=$arrPageDetails['strPictureStrip3']?>" alt="default">
	</div>
</form>